@echo off
set BASE=%~d0%~p0lib
SET LIB=%BASE%\xercesImpl.jar;%BASE%\xercesSamples.jar;%BASE%\xml-apis.jar;%BASE%\xmlParserAPIs.jar;.
set XML_FILE=%1
IF NOT DEFINED XML_FILE GOTO USAGE

echo ** Validating %1
java -cp %LIB% sax.Counter -v -s -f %1
goto EOF

:USAGE
echo Usage: Validate [xml-file-name]

:EOF