#remove strings ?ver=
find . -type f -name '*.html' | xargs sed -i "s/\?ver=[^\'^\"]*//g"
