$content = Get-Content 'thesis_office.tex' -Raw
$content = $content -replace '(?m)^(\s*(?:\\item|\d+\.)\s+\\textbf\{.*?\}:?)\s+(.*)', '$1 \\ $2'
$content = $content -replace '(?m)^(\s*\\item\s+\\texttt\{.*?\}.*?:)\s+(.*)', '$1 \\ $2'
Set-Content 'thesis_office.tex' $content -Encoding UTF8
