@echo off
REM Quick Start Script for Portfolio Website
REM This script starts a local PHP development server

echo ===================================
echo  Portfolio Website - Quick Start
echo ===================================
echo.
echo Starting PHP development server...
echo.
echo The site will be available at:
echo http://localhost:8000/index.php
echo.
echo Press Ctrl+C to stop the server
echo ===================================
echo.

REM Start PHP built-in server
php -S localhost:8000

pause
