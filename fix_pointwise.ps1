$content = Get-Content 'thesis_office.tex' -Raw
$content = $content -replace '(?m)^(\s*(?:\\item|\d+\.)\s+.*?)\s*\\\\\s+(.*)$', "`$1`r`n    \begin{itemize}`r`n        \item `$2`r`n    \end{itemize}"
Set-Content 'thesis_office.tex' $content -Encoding UTF8
