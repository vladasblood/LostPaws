# LostPaws
Lost Paws offers services for our pets.

# HOW-TO: 

## Install PHP with XAMPP

https://www.youtube.com/watch?v=FG_tpCCFwOQ&ab_channel=GeekyScript 

## How to Run PHP on Visual Studio Code

https://www.youtube.com/watch?v=zT6QrGIfXaU&ab_channel=ProgrammingGuru

## Check Status
``` 
git status
```

## Update files:
```
git status
git add [file-name.extension]
git commit -m "[description]"
git push
```

### Switch Branches
```
git branch
git checkout [branch-name]
```

### New Branch
```
git checkout -b [new-branch-name]
```
#### Fetch Your New Branch
```
git fetch -all
```

### Pull Branch from Remote Branch
```
https://www.atlassian.com/git/tutorials/syncing/git-pull
```

#### Push your sub-branch
```
git push origin [new-branch-name]
git merge [new-branch-name]

```

### How to add files to another branch?

Switch on the branch B:
```
git checkout branch_B
```

Then, checkout the files you want to keep:
```
git checkout branch_A file1 file2 file3 [...]
Note: use "." if you want to transfer files from Branch A to B
```

At last, commit your changes
```
git commit -m "Backport changes from branch A for reasons"
```



