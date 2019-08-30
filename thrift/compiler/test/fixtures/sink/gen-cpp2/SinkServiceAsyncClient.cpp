/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

#include "thrift/compiler/test/fixtures/sink/gen-cpp2/SinkServiceAsyncClient.h"

#include <thrift/lib/cpp2/gen/client_cpp.h>

namespace cpp2 {
typedef apache::thrift::ThriftPresult<false> SinkService_method_pargs;
typedef apache::thrift::ThriftPResultSink<
    apache::thrift::ThriftPresult<true>,
    apache::thrift::ThriftPresult<true, apache::thrift::FieldData<0, apache::thrift::protocol::T_STRUCT,  ::cpp2::SinkPayload*>>,
    apache::thrift::ThriftPresult<true, apache::thrift::FieldData<0, apache::thrift::protocol::T_STRUCT,  ::cpp2::FinalResponse*>>
    > SinkService_method_presult;
typedef apache::thrift::ThriftPresult<false> SinkService_methodAndReponse_pargs;
typedef apache::thrift::ThriftPResultSink<
    apache::thrift::ThriftPresult<true, apache::thrift::FieldData<0, apache::thrift::protocol::T_STRUCT,  ::cpp2::InitialResponse*>>,
    apache::thrift::ThriftPresult<true, apache::thrift::FieldData<0, apache::thrift::protocol::T_STRUCT,  ::cpp2::SinkPayload*>>,
    apache::thrift::ThriftPresult<true, apache::thrift::FieldData<0, apache::thrift::protocol::T_STRUCT,  ::cpp2::FinalResponse*>>
    > SinkService_methodAndReponse_presult;

template <typename Protocol_>
void SinkServiceAsyncClient::methodT(Protocol_* prot, apache::thrift::RpcOptions& rpcOptions, std::shared_ptr<apache::thrift::detail::ac::ClientRequestContext> ctx, apache::thrift::SinkClientCallback* callback) {
  std::shared_ptr<apache::thrift::transport::THeader> header(ctx, &ctx->header);
  SinkService_method_pargs args;
  auto sizer = [&](Protocol_* p) { return args.serializedSizeZC(p); };
  auto writer = [&](Protocol_* p) { args.write(p); };
  apache::thrift::clientSendT<Protocol_>(prot, rpcOptions, std::move(callback), ctx->ctx, std::move(header), channel_.get(), "method", writer, sizer);
  ctx->reqContext.setRequestHeader(nullptr);
}

template <typename Protocol_>
void SinkServiceAsyncClient::methodAndReponseT(Protocol_* prot, apache::thrift::RpcOptions& rpcOptions, std::shared_ptr<apache::thrift::detail::ac::ClientRequestContext> ctx, apache::thrift::SinkClientCallback* callback) {
  std::shared_ptr<apache::thrift::transport::THeader> header(ctx, &ctx->header);
  SinkService_methodAndReponse_pargs args;
  auto sizer = [&](Protocol_* p) { return args.serializedSizeZC(p); };
  auto writer = [&](Protocol_* p) { args.write(p); };
  apache::thrift::clientSendT<Protocol_>(prot, rpcOptions, std::move(callback), ctx->ctx, std::move(header), channel_.get(), "methodAndReponse", writer, sizer);
  ctx->reqContext.setRequestHeader(nullptr);
}



void SinkServiceAsyncClient::methodImpl(apache::thrift::RpcOptions& rpcOptions, std::shared_ptr<apache::thrift::detail::ac::ClientRequestContext> ctx, apache::thrift::SinkClientCallback* callback) {
  switch (apache::thrift::GeneratedAsyncClient::getChannel()->getProtocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolWriter writer;
      methodT(&writer, rpcOptions, std::move(ctx), std::move(callback));
      break;
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolWriter writer;
      methodT(&writer, rpcOptions, std::move(ctx), std::move(callback));
      break;
    }
    default:
    {
      apache::thrift::detail::ac::throw_app_exn("Could not find Protocol");
    }
  }
}

#if FOLLY_HAS_COROUTINES
folly::coro::Task<apache::thrift::ClientSink< ::cpp2::SinkPayload,  ::cpp2::FinalResponse>> SinkServiceAsyncClient::co_method() {
  ::apache::thrift::RpcOptions rpcOptions;
  auto protocolId = apache::thrift::GeneratedAsyncClient::getChannel()->getProtocolId();
  auto ctx = std::make_shared<apache::thrift::detail::ac::ClientRequestContext>(protocolId, rpcOptions.releaseWriteHeaders(), this->handlers_, this->getServiceName(), "SinkService.method");
  auto callback = apache::thrift::detail::ClientSinkBridge::create();
  methodImpl(rpcOptions, ctx, callback.get());
  auto firstPayload = co_await callback->getFirstThriftResponse();
  if (firstPayload.hasException()) {
    firstPayload.exception().throw_exception();
  }

  auto tHeader = std::make_unique<apache::thrift::transport::THeader>();
  tHeader->setClientType(THRIFT_HTTP_CLIENT_TYPE);
  apache::thrift::detail::fillTHeaderFromResponseRpcMetadata(firstPayload->metadata, *tHeader);
  apache::thrift::ClientReceiveState _returnState(
      protocolId,
      std::move(firstPayload->payload),
      std::move(callback),
      std::move(tHeader),
      std::shared_ptr<apache::thrift::ContextStack>(ctx, &ctx->ctx));
  co_return recv_method(_returnState);
}
#endif // FOLLY_HAS_COROUTINES

folly::exception_wrapper SinkServiceAsyncClient::recv_wrapped_method(apache::thrift::ClientSink< ::cpp2::SinkPayload,  ::cpp2::FinalResponse>& _return, ::apache::thrift::ClientReceiveState& state) {
  if (state.isException()) {
    return std::move(state.exception());
  }
  if (!state.buf()) {
    return folly::make_exception_wrapper<apache::thrift::TApplicationException>("recv_ called without result");
  }

  using result = SinkService_method_presult;
  constexpr auto const fname = "method";
  auto exMap = [](typename result::SinkPResultType&, folly::exception_wrapper) {
    return false;
  };
  switch (state.protocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result, apache::thrift::BinaryProtocolWriter>(
          fname, &reader, state, state.extractSink(), _return, std::move(exMap));
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result, apache::thrift::CompactProtocolWriter>(
          fname, &reader, state, state.extractSink(), _return, std::move(exMap));
    }
    default:
    {
    }
  }
  return folly::make_exception_wrapper<apache::thrift::TApplicationException>("Could not find Protocol");
}

apache::thrift::ClientSink< ::cpp2::SinkPayload,  ::cpp2::FinalResponse> SinkServiceAsyncClient::recv_method(::apache::thrift::ClientReceiveState& state) {
  apache::thrift::ClientSink< ::cpp2::SinkPayload,  ::cpp2::FinalResponse> _return;
  auto ew = recv_wrapped_method(_return, state);
  if (ew) {
    ew.throw_exception();
  }
  return _return;
}

apache::thrift::ClientSink< ::cpp2::SinkPayload,  ::cpp2::FinalResponse> SinkServiceAsyncClient::recv_instance_method(::apache::thrift::ClientReceiveState& state) {
  return recv_method(state);
}

folly::exception_wrapper SinkServiceAsyncClient::recv_instance_wrapped_method(apache::thrift::ClientSink< ::cpp2::SinkPayload,  ::cpp2::FinalResponse>& _return, ::apache::thrift::ClientReceiveState& state) {
  return recv_wrapped_method(_return, state);
}

void SinkServiceAsyncClient::methodAndReponseImpl(apache::thrift::RpcOptions& rpcOptions, std::shared_ptr<apache::thrift::detail::ac::ClientRequestContext> ctx, apache::thrift::SinkClientCallback* callback) {
  switch (apache::thrift::GeneratedAsyncClient::getChannel()->getProtocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolWriter writer;
      methodAndReponseT(&writer, rpcOptions, std::move(ctx), std::move(callback));
      break;
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolWriter writer;
      methodAndReponseT(&writer, rpcOptions, std::move(ctx), std::move(callback));
      break;
    }
    default:
    {
      apache::thrift::detail::ac::throw_app_exn("Could not find Protocol");
    }
  }
}

#if FOLLY_HAS_COROUTINES
folly::coro::Task<apache::thrift::ResponseAndClientSink< ::cpp2::InitialResponse,  ::cpp2::SinkPayload,  ::cpp2::FinalResponse>> SinkServiceAsyncClient::co_methodAndReponse() {
  ::apache::thrift::RpcOptions rpcOptions;
  auto protocolId = apache::thrift::GeneratedAsyncClient::getChannel()->getProtocolId();
  auto ctx = std::make_shared<apache::thrift::detail::ac::ClientRequestContext>(protocolId, rpcOptions.releaseWriteHeaders(), this->handlers_, this->getServiceName(), "SinkService.methodAndReponse");
  auto callback = apache::thrift::detail::ClientSinkBridge::create();
  methodAndReponseImpl(rpcOptions, ctx, callback.get());
  auto firstPayload = co_await callback->getFirstThriftResponse();
  if (firstPayload.hasException()) {
    firstPayload.exception().throw_exception();
  }

  auto tHeader = std::make_unique<apache::thrift::transport::THeader>();
  tHeader->setClientType(THRIFT_HTTP_CLIENT_TYPE);
  apache::thrift::detail::fillTHeaderFromResponseRpcMetadata(firstPayload->metadata, *tHeader);
  apache::thrift::ClientReceiveState _returnState(
      protocolId,
      std::move(firstPayload->payload),
      std::move(callback),
      std::move(tHeader),
      std::shared_ptr<apache::thrift::ContextStack>(ctx, &ctx->ctx));
  co_return recv_methodAndReponse(_returnState);
}
#endif // FOLLY_HAS_COROUTINES

folly::exception_wrapper SinkServiceAsyncClient::recv_wrapped_methodAndReponse(apache::thrift::ResponseAndClientSink< ::cpp2::InitialResponse,  ::cpp2::SinkPayload,  ::cpp2::FinalResponse>& _return, ::apache::thrift::ClientReceiveState& state) {
  if (state.isException()) {
    return std::move(state.exception());
  }
  if (!state.buf()) {
    return folly::make_exception_wrapper<apache::thrift::TApplicationException>("recv_ called without result");
  }

  using result = SinkService_methodAndReponse_presult;
  constexpr auto const fname = "methodAndReponse";
  auto exMap = [](typename result::SinkPResultType&, folly::exception_wrapper) {
    return false;
  };
  switch (state.protocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result, apache::thrift::BinaryProtocolWriter>(
          fname, &reader, state, state.extractSink(), _return, std::move(exMap));
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result, apache::thrift::CompactProtocolWriter>(
          fname, &reader, state, state.extractSink(), _return, std::move(exMap));
    }
    default:
    {
    }
  }
  return folly::make_exception_wrapper<apache::thrift::TApplicationException>("Could not find Protocol");
}

apache::thrift::ResponseAndClientSink< ::cpp2::InitialResponse,  ::cpp2::SinkPayload,  ::cpp2::FinalResponse> SinkServiceAsyncClient::recv_methodAndReponse(::apache::thrift::ClientReceiveState& state) {
  apache::thrift::ResponseAndClientSink< ::cpp2::InitialResponse,  ::cpp2::SinkPayload,  ::cpp2::FinalResponse> _return;
  auto ew = recv_wrapped_methodAndReponse(_return, state);
  if (ew) {
    ew.throw_exception();
  }
  return _return;
}

apache::thrift::ResponseAndClientSink< ::cpp2::InitialResponse,  ::cpp2::SinkPayload,  ::cpp2::FinalResponse> SinkServiceAsyncClient::recv_instance_methodAndReponse(::apache::thrift::ClientReceiveState& state) {
  return recv_methodAndReponse(state);
}

folly::exception_wrapper SinkServiceAsyncClient::recv_instance_wrapped_methodAndReponse(apache::thrift::ResponseAndClientSink< ::cpp2::InitialResponse,  ::cpp2::SinkPayload,  ::cpp2::FinalResponse>& _return, ::apache::thrift::ClientReceiveState& state) {
  return recv_wrapped_methodAndReponse(_return, state);
}

} // cpp2
namespace apache { namespace thrift {

}} // apache::thrift
