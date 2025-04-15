#!/usr/bin/env bash

EXPECTED_URL="https://github.com/AliSyed1999/mvc"

echo "Kontrollerar att Git remote 'origin' är korrekt satt..."

remote_url=$(git remote get-url origin 2>/dev/null)

if [[ -z "$remote_url" ]]; then
    echo "FAILED  Ingen remote med namnet 'origin' hittades."
    exit 1
fi

if [[ "$remote_url" != "$EXPECTED_URL" ]]; then
    echo "FAILED  'origin' pekar på fel URL:"
    echo "        Hittad:    $remote_url"
    echo "        Förväntad: $EXPECTED_URL"
    exit 1
fi

echo "PASSED  Git remote 'origin' pekar korrekt på: $remote_url"
exit 0

