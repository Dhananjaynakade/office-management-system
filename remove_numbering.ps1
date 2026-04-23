$content = Get-Content 'thesis_office.tex' -Raw
$content = $content -replace '(?m)^(\\section\*\{)\d+\.\d+\s+(.*)$', '$1$2'
Set-Content 'thesis_office.tex' $content -Encoding UTF8
