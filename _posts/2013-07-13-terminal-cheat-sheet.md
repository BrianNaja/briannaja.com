---
title: Terminal Cheat Sheet
layout: post
category: post
---

![terminal](/images/terminal/terminal.png "Mac OS X Terminal")

###OS X

* `cd`  - Directory
* `clear` - Clear terminal screen
* `exit` - Exit the shell
* `li` - List files in long format, showing invisible files (ls -la)
* `mv` - Move or rename files or directories (mv [options] source target)
* `rmdir` - Remove folder
* `rm -R` - Delete folder
* `pwd` - Print Working Directory
* `sudo` - Execute a command as another user
* `mkdir ~/Hello-World` - Creates a directory for your project called "Hello-World" in your user directory
* `cd ~/Hello-World` - Changes the current working directory to your newly created directory
* `touch README` - Creates a file called "README" in your Hello-World directory
* `ls` - List files
* `ls -a` - List all files
* `pico <-file->` - To open and edit file

LInks: [An A-Z Index of the Apple OS X command line](http://ss64.com/osx/)


###Rails

* `rails s` - Starts server
* `control+c` - Stops server
* `rails c` - Starts console
* `ctrl d` - Exits console
* `exit` - Exits console
* `rails destroy controller controller_name views_name` - Destroy's controller, views, helpers, tests and assets
* `rails destroy scaffold scafold_name` - Destroy's scafold


###Jekyll

* `ctrl +c` - Stops the server
* `jekyll --build` - Builds website
* `jekyll --build --w` - Live reload



###Interactive Ruby Shell

* `irb` - To start the Interactive Ruby Shell
* `load ./path_to_some_file.rb` - To load a file in the Interactive Ruby Shell
* `exit, quit, irb_exit` - Quits the irb session


###Git

* `git init` - Create an empty git repository or reinitialize an existing one
* `which git` - Find where git is installed
* `git add .` - Adds all the files in the directory to be committed
* `git add '.txt'` - Adds files files using a wildcard
* `git add -A` - Adds a files in the directory to be committed
* `git status` - Show the working tree status
* `git ls-files` - Lists the files already commited
* `git rm` - Removes a file from the directory to be committed
* `git mv oldname newname` - Shorthand for: 
    * mv oldname newname 
    * git add newname 
    * git rm oldname
* `git add -u` - Removes all the deleted files from the staging area 
* `git add README` - Stages your README file, adding it to the list of files to be committed
* `git commit -m 'first commit'` - Commits your files, adding the message "first commit"
* `git log --summary` - To see more information for each commit.
* `git remote add origin https://github.com/username/Hello-World.git` - Creates a remote named "origin" pointing at your GitHub repo
* `git branc­h <-name_of_branch->` - To creat a branch
* `git branc­h` - To view all branches
* `git checkout <-name_of_branch->` - To switch branches
* `git merge <-name_of_branch->` - To merge your changes into the master
* `git branch -d <-name_of_branch->` - To delete a branch
* `git push origin master` - Sends your commits in the "master" branch to GitHub
* `git push origin <-name_of_branch->` - To push the branch on github
* `git branch -D <-name_of_branch->` - Delete branch
* `git push origin --delete <-name_of_branch->` - Delete remote branch
* `git reset --hard commit 0d1d7.......` - To revert if you have committed junk but not pushed
* `git --help` - Help

###To keep gh-pages in sync with master

* `git add .`
* `git status` - To see what changes are going to be commited
* `git commit -m 'Some descriptive commit message'`
* `git push origin master`

**Now, when I use gh-pages, there are only a few more commands that I have to use after the above:**

* `git checkout gh-pages ` - To go to the gh-pages branch
* `git rebase master` - To bring gh-pages up to date with master
* `git push origin gh-pages` - To commit the changes
* `git checkout master` - To return to the master branch

Links: [Set Up Git](https://help.github.com/articles/set-up-git#platform-mac) | 
[Create A Repo](https://help.github.com/articles/create-a-repo) | 
[Fork A Repo](https://help.github.com/articles/fork-a-repo) | 
[Be Social](https://help.github.com/articles/be-social)
