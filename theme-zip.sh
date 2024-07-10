#!/bin/bash

# Get theme name from package.json
THEME_NAME=$(jq -r '.name' package.json)

# Name of the output zip file
ZIP_FILE="${THEME_NAME}.zip"

# Create the zip file, excluding specified files and directories
zip -r $ZIP_FILE . -x \
    "*.git*" \
    "*.github*" \
    "*.DS_Store" \
    ".gitignore" \
    "package.json" \
    "package-lock.json" \
    "README.md" \
    "theme-zip.sh" \
    "${THEME_NAME}*" \

echo "Created $ZIP_FILE"