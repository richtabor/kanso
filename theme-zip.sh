#!/bin/bash

# Get theme name from package.json
THEME_NAME=$(jq -r '.name' package.json)

# Name of the output zip file
ZIP_FILE="${THEME_NAME}.zip"

# Create the zip file, excluding specified files and directories
zip -r $ZIP_FILE . -x \
    "*.git*" \
    "*.github*" \
    "node_modules*" \
    "vendor*" \
    ".gitignore" \
    "*.lock" \
    "*.dist" \
    "*.DS_Store" \
    "*.code-workspace" \
    "composer.json" \
    "package.json" \
    "package-lock.json" \
    "blueprint.json" \
    "blueprint-content.xml" \
    "README.md" \
    "theme-zip.sh" \
    "${THEME_NAME}*" \

echo "Created $ZIP_FILE"