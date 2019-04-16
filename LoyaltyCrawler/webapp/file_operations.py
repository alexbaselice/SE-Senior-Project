import shutil

def copy_file(source, dest):
    """      
    Copy a file from source to dest. source and dest
    must be file-like objects, i.e. any object with a read or
    write method, like for example StringIO.
    """
    shutil.copy2(source, dest)
	
def move_file(source, dest):
    """      
    Move a file from source to dest. source and dest
    must be file-like objects, i.e. any object with a read or
    write method, like for example StringIO.
    """
    shutil.move(source, dest)