######################
# Variables

CODE_INSIDERS_DIR="$(HOME)/.config/Code\ -\ Insiders/User/globalStorage/3axap4ehko.file-templates-manager"
REPOSITORY_DIR="$(shell pwd)"
TEMPLATES_DIR="$(REPOSITORY_DIR)/templates"

######################
# Commands

# linking the templates folder to the code insiders templates folder
link:
	@echo "Linking the Code Insiders template folder to the templates directory"
	@rm -rf "$(CODE_INSIDERS_DIR)" || true
	@ln -s "$(TEMPLATES_DIR)" "$(CODE_INSIDERS_DIR)"