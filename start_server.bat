@echo off
TITLE Office Management System
color 0B

echo =======================================================
echo          Starting Office Management System...
echo =======================================================
echo.

:: Navigate to the directory where this script is located
cd /d "%~dp0"

:: Start the default web browser and point it to the local server
echo [1/2] Opening web browser to http://127.0.0.1:8000...
start http://127.0.0.1:8000

echo [2/2] Starting Laravel Development Server...
echo.
echo Press Ctrl+C to stop the server.
echo =======================================================

:: Start the server
php artisan serve

pause
