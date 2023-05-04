@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\MyPhpAdmin\Xampp\hypersonic\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\ingres\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\ingres\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\mysql\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\mysql\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\postgresql\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\postgresql\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\apache\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\apache\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\openoffice\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\openoffice\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\apache-tomcat\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\resin\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\resin\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\jetty\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\jetty\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\subversion\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\MyPhpAdmin\Xampp\lucene\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\lucene\scripts\ctl.bat START)
if exist D:\MyPhpAdmin\Xampp\third_application\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\MyPhpAdmin\Xampp\third_application\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\third_application\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\lucene\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\MyPhpAdmin\Xampp\subversion\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\subversion\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\jetty\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\jetty\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\hypersonic\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\resin\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\resin\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\MyPhpAdmin\Xampp\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\openoffice\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\openoffice\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\apache\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\apache\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\ingres\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\ingres\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\mysql\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\mysql\scripts\ctl.bat STOP)
if exist D:\MyPhpAdmin\Xampp\postgresql\scripts\ctl.bat (start /MIN /B D:\MyPhpAdmin\Xampp\postgresql\scripts\ctl.bat STOP)

:end

