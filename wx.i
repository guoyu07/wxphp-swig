%module wxwidgets;

%minit {
    //wxInitialize();
}

%mshutdown {
    //wxUninitialize();
}

%{
#ifdef __cplusplus
#include <wx/wx.h>
#endif
%}

%include interface/init.h
%include interface/app.h

%include interface/window.h
%include interface/nonownedwnd.h
%include interface/toplevel.h
%include interface/frame.h


