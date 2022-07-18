import psutil
print(psutil.cpu_percent(interval=1))

print(psutil.virtual_memory().percent)

