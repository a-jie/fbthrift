#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

from libcpp.memory cimport shared_ptr, make_shared, unique_ptr, make_unique
from libcpp.string cimport string
from libcpp cimport bool as cbool
from libcpp.iterator cimport inserter as cinserter
from cpython cimport bool as pbool
from libc.stdint cimport int8_t, int16_t, int32_t, int64_t, uint32_t
from cython.operator cimport dereference as deref, preincrement as inc
import thrift.py3.types
cimport thrift.py3.types
cimport thrift.py3.exceptions
from thrift.py3.types import NOTSET
cimport thrift.py3.std_libcpp as std_libcpp
from thrift.py3.serializer cimport IOBuf
from thrift.py3.serializer import Protocol
cimport thrift.py3.serializer as serializer
from thrift.py3.serializer import deserialize, serialize

import sys
from collections.abc import Sequence, Set, Mapping, Iterable
from enum import Enum


class Enum(Enum):
    ONE = <int> (Enum__ONE)
    TWO = <int> (Enum__TWO)
    THREE = <int> (Enum__THREE)

cdef cEnum Enum_to_cpp(value):
    if value == Enum.ONE:
        return Enum__ONE
    elif value == Enum.TWO:
        return Enum__TWO
    elif value == Enum.THREE:
        return Enum__THREE


cdef class Struct(thrift.py3.types.Struct):

    def __init__(
        Struct self,
        first=None,
        second=None
    ):
        self._cpp_obj = make_shared[cStruct]()

        inst = self
        if first is not None:
            deref(inst._cpp_obj).first = first
            deref(inst._cpp_obj).__isset.first = True

        if second is not None:
            deref(inst._cpp_obj).second = second.encode('UTF-8')
            deref(inst._cpp_obj).__isset.second = True


    cdef bytes _serialize(Struct self, proto):
        cdef string c_str
        if proto is Protocol.COMPACT:
            serializer.CompactSerialize[cStruct](deref(self._cpp_obj.get()), &c_str)
        elif proto is Protocol.BINARY:
            serializer.BinarySerialize[cStruct](deref(self._cpp_obj.get()), &c_str)
        elif proto is Protocol.JSON:
            serializer.JSONSerialize[cStruct](deref(self._cpp_obj.get()), &c_str)
        return <bytes> c_str

    cdef uint32_t _deserialize(Struct self, const IOBuf* buf, proto):
        cdef uint32_t needed
        if proto is Protocol.COMPACT:
            needed = serializer.CompactDeserialize[cStruct](buf, deref(self._cpp_obj.get()))
        elif proto is Protocol.BINARY:
            needed = serializer.BinaryDeserialize[cStruct](buf, deref(self._cpp_obj.get()))
        elif proto is Protocol.JSON:
            needed = serializer.JSONDeserialize[cStruct](buf, deref(self._cpp_obj.get()))
        return needed

    def __reduce__(self):
        return (deserialize, (Struct, serialize(self)))

    def __call__(
        Struct self,
        first=NOTSET,
        second=NOTSET
    ):
        changes = any((
            first is not NOTSET,

            second is not NOTSET,
        ))

        if not changes:
            return self

        inst = <Struct>Struct.__new__(Struct)
        inst._cpp_obj = make_shared[cStruct](deref(self._cpp_obj))
        cdef Struct defaults = Struct_defaults

        # Convert None's to default value.
        if first is None:
            deref(inst._cpp_obj).first = deref(defaults._cpp_obj).first
            deref(inst._cpp_obj).__isset.first = False
        if first is NOTSET:
            first = None
        if second is None:
            deref(inst._cpp_obj).second = deref(defaults._cpp_obj).second
            deref(inst._cpp_obj).__isset.second = False
        if second is NOTSET:
            second = None

        if first is not None:
            deref(inst._cpp_obj).first = first
            deref(inst._cpp_obj).__isset.first = True

        if second is not None:
            deref(inst._cpp_obj).second = second.encode('UTF-8')
            deref(inst._cpp_obj).__isset.second = True

        return inst

    def __iter__(self):
        yield 'first', self.first
        yield 'second', self.second

    def __bool__(self):
        return deref(self._cpp_obj).__isset.first or deref(self._cpp_obj).__isset.second

    @staticmethod
    cdef create(shared_ptr[cStruct] cpp_obj):
        inst = <Struct>Struct.__new__(Struct)
        inst._cpp_obj = cpp_obj
        return inst

    @property
    def first(self):
        if not deref(self._cpp_obj).__isset.first:
            return None

        return self._cpp_obj.get().first

    @property
    def second(self):
        if not deref(self._cpp_obj).__isset.second:
            return None

        return self._cpp_obj.get().second.decode('UTF-8')


    def __richcmp__(self, other, op):
        cdef int cop = op
        if cop not in (2, 3):
            raise TypeError("unorderable types: {}, {}".format(self, other))
        if not (
                isinstance(self, Struct) and
                isinstance(other, Struct)):
            if cop == 2:  # different types are never equal
                return False
            else:         # different types are always notequal
                return True

        cdef cStruct cself = deref((<Struct>self)._cpp_obj)
        cdef cStruct cother = deref((<Struct>other)._cpp_obj)
        cdef cbool cmp = cself == cother
        if cop == 2:
            return cmp
        return not cmp

    def __hash__(Struct self):
        if not self.__hash:
            self.__hash = hash((
            self.first,
            self.second,
            ))
        return self.__hash

    def __repr__(Struct self):
        return f'Struct(first={repr(self.first)}, second={repr(self.second)})'


Struct_defaults = Struct()


cdef class List__Enum:
    def __init__(self, items=None):
        if isinstance(items, List__Enum):
            self._cpp_obj = (<List__Enum> items)._cpp_obj
        else:
          self._cpp_obj = make_shared[vector[cEnum]]()
          if items:
              for item in items:
                  deref(self._cpp_obj).push_back(<cEnum> Enum_to_cpp(item))

    @staticmethod
    cdef create(
            shared_ptr[vector[cEnum]] c_items):
        inst = <List__Enum>List__Enum.__new__(List__Enum)
        inst._cpp_obj = c_items
        return inst

    def __getitem__(self, int index):
        size = len(self)
        # Convert a negative index
        if index < 0:
            index = size - index
        if index >= size:
            raise IndexError('list index out of range')
        # Support negative indexes
        if index < 0:
            index = size - index
        cdef cEnum citem = (
            deref(self._cpp_obj.get())[index])
        return Enum(<int> citem)

    def __len__(self):
        return deref(self._cpp_obj).size()

    def __richcmp__(self, other, op):
        cdef int cop = op
        if cop not in (2, 3):
            raise TypeError("unorderable types: {}, {}".format(type(self), type(other)))
        if not (isinstance(self, Iterable) and isinstance(other, Iterable)):
            return cop != 2
        if (len(self) != len(other)):
            return cop != 2

        for one, two in zip(self, other):
            if one != two:
                return cop != 2

        return cop == 2

    def __hash__(self):
        if not self.__hash:
            self.__hash = hash(tuple(self))
        return self.__hash

    def __contains__(self, item):
        if not self:
            return False
        cdef cEnum citem = <cEnum> Enum_to_cpp(item)
        cdef vector[cEnum] vec = deref(
            self._cpp_obj.get())
        return std_libcpp.find(vec.begin(), vec.end(), citem) != vec.end()

    def __iter__(self):
        if not self:
            raise StopIteration
        cdef cEnum citem
        for citem in deref(self._cpp_obj):
            yield Enum(<int> citem)

    def __repr__(self):
        if not self:
            return 'i[]'
        return f'i[{", ".join(map(repr, self))}]'

    def __reversed__(self):
        if not self:
            raise StopIteration
        cdef cEnum citem
        cdef vector[cEnum] vec = deref(
            self._cpp_obj.get())
        cdef vector[cEnum].reverse_iterator loc = vec.rbegin()
        while loc != vec.rend():
            citem = deref(loc)
            yield Enum(<int> citem)
            inc(loc)

    def index(self, item):
        if not self:
            raise ValueError(f'{item} is not in list')
        cdef cEnum citem = <cEnum> Enum_to_cpp(item)
        cdef vector[cEnum] vec = deref(self._cpp_obj.get())
        cdef vector[cEnum].iterator loc = std_libcpp.find(vec.begin(), vec.end(), citem)
        if loc != vec.end():
            return <int64_t> std_libcpp.distance(vec.begin(), loc)
        raise ValueError(f'{item} is not in list')

    def count(self, item):
        if not self:
            return 0
        cdef cEnum citem = <cEnum> Enum_to_cpp(item)
        cdef vector[cEnum] vec = deref(self._cpp_obj.get())
        return <int64_t> std_libcpp.count(vec.begin(), vec.end(), citem)


Sequence.register(List__Enum)

c0 = Struct.create(
    make_shared[cStruct](cc0()))
e0s = List__Enum.create(make_shared[vector[cEnum]](ce0s()))
