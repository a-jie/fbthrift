/*
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

#pragma once

#include <thrift/lib/cpp2/async/StreamPublisher.h>
#include <thrift/lib/cpp2/server/ThriftServer.h>
#include <thrift/lib/cpp2/transport/rsocket/server/RSRoutingHandler.h>
#include <thrift/lib/py3/test/stream/if/gen-cpp2/StreamTestService.tcc>

namespace thrift {
namespace py3 {
namespace test {

class StreamTestService : public StreamTestServiceSvIf {
 public:
  static std::shared_ptr<StreamTestService> createInstance() {
    return std::make_shared<StreamTestService>();
  }
  apache::thrift::ServerStream<int32_t> returnstream(
      int32_t i32_from,
      int32_t i32_to) override {
    return createStreamGenerator(
        [i32_from, i32_to]() -> folly::coro::AsyncGenerator<int32_t> {
          for (auto i = i32_from; i < i32_to; ++i) {
            co_yield i;
          }
        });
  }
  apache::thrift::ServerStream<int32_t> streamthrows(bool t) override {
    if (t) {
      throw FuncEx{};
    } else {
      return createStreamGenerator(
          []() -> folly::coro::AsyncGenerator<int32_t&&> { throw StreamEx{}; });
    }
  }
  apache::thrift::ResponseAndServerStream<
      included::Included,
      included::Included>
  returnresponseandstream(std::unique_ptr<included::Included> foo) override {
    included::Included resp;
    resp.from = 100;
    resp.to = 200;
    auto stream = createStreamGenerator(
        [foo = std::move(foo)]() mutable
        -> folly::coro::AsyncGenerator<included::Included&&> {
          for (auto i = foo->from; i < foo->to; ++i) {
            included::Included p;
            p.from = foo->from;
            p.to = i;
            co_yield std::move(p);
          }
        });
    return {std::move(resp), std::move(stream)};
  }
};

std::unique_ptr<apache::thrift::TransportRoutingHandler>
createRSRoutingHandler() {
  return std::make_unique<apache::thrift::RSRoutingHandler>();
}

} // namespace test
} // namespace py3
} // namespace thrift
