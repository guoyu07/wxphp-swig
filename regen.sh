#!/bin/bash

swig -php \
    -c++ \
    -addextern \
    -outcurrentdir \
    wx.i
