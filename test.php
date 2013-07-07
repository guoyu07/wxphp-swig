<?php
include("wxwidgets.php");

class TestFrame extends wxFrame {
	
	function __construct(){
		parent::__construct(null); //Something wrong on swig
	}
}

class TestApp extends wxApp 
{
	function OnInit()
	{
		$this->frame = new wxFrame();
		$this->frame->Show();
		
		return true;
	}
	
	function OnExit()
	{
		return 0;
	}
}

$myapp = new TestApp();

wxApp::SetInstance($myapp);

wxEntryStart(0, null);

$myapp->OnInit();
$myapp->OnRun();
$myapp->OnExit();

wxEntryCleanup();

?>
