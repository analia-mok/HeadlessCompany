@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../contentful/contentful/bin/contentful
php "%BIN_TARGET%" %*
