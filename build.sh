#!/bin/bash

echo "Copying reveal.js core JavaScript."
cp reveal.js/js/reveal.min.js template/js/reveal.min.js

echo "Copying reveal.js core CSS files."
cp -r reveal.js/css/ template
