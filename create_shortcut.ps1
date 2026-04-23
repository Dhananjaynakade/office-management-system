$wshell = New-Object -ComObject WScript.Shell
$shortcut = $wshell.CreateShortcut("$HOME\Desktop\Start Office Management System.lnk")
$shortcut.TargetPath = "c:\Users\Dhananjay\Downloads\office-management-system-master\office-management-system-master\start_server.bat"
$shortcut.WorkingDirectory = "c:\Users\Dhananjay\Downloads\office-management-system-master\office-management-system-master"
$shortcut.IconLocation = "shell32.dll,137"
$shortcut.Save()
