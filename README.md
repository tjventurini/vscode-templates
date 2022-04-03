# VS Code Template Manager Templates

Here are some templates to use with the [File Templates Manager](https://github.com/3axap4eHko/file-templates-manager#readme) extension for VS Code.

## Installation

Note: You should fork this project!

Clone the repo to a location of your choice.

```
git clone git@github.com:tjventurini/vscode-templates.git
```

Then you should take a look at the `Makefile` and change paths if needed.

Once this is done, you can just run the `make` command from within the repository root and the script will create a symbolic link for the `templates` folder to the `~/.config/Code\ -\ Insiders/User/globalStorage/3axap4ehko.file-templates-manager`.

```
make
# output
Linking the Code Insiders template folder to the templates directory
```

And that's it!