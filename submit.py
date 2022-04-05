from os import system
import time

system("git add .")
system("git commit -m \""+ time.asctime(time.localtime(time.time())) +"\"")
system("git push")