rem This is a batch file that launches a nice programming environment

rem echo off

set PATH=.;%PATH%;C:\Program Files\Java\jdk1.8.0_111\bin

set CLASSPATH=.;%CLASSPATH%

taskkill /F /IM xwidget.exe

doskey ls=dir

prompt John_Doe $P: 

cd .

cmd /K "start "C:\Program Files\Notepad++\notepad++.exe""