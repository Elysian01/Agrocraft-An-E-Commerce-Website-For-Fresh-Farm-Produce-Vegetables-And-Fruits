@echo off
title Eligit


cls
echo.
echo      ************      ***                          ***************                  ***
echo      ************      ***                         ******************                ***
echo      ***               ***               ***      ***                      ***    *********
echo      ***               ***               ***      ***                      ***    *********
echo      *******           ***                        ***                                ***
echo      *******           ***               ***      ***    ************      ***       ***
echo      ***               ***               ***      ***    ************      ***       ***
echo      ***               ***               ***      ****   ***      ***      ***       ***   ***
echo      ************      ************      ***       *********      ***      ***       *********
echo      ************      ************      ***        ********      ***      ***       *********
echo.

color 0a
echo -----------------------------------
echo Made By: Abhishek Gupta    
echo -----------------------------------
echo.
echo.

set /p message=Enter Your Message : 

if %ERRORLEVEL% neq 0 goto ProcessError
git add .
git commit -m "%message%"
git pull
git push origin master

:ProcessError
git add .
git commit -m "%message%"
git add .
git commit -m "%message%"
git add .
git commit -m "%message%"
git pull
git push origin master
exit /b 1
