/******************************************************************************/
/* Constants */
/******************************************************************************/
const SEARCH_FORM = "search-form";
const SEARCH_FORM_MESSAGE = "search-bar";


/******************************************************************************/
/* Form Validation */
/******************************************************************************/
function validateSearch() {
	let searchQueryElement = document.getElementById(SEARCH_FORM_MESSAGE);
	
	if ((! searchQueryElement) ) {
		return false;	
	}

	let searchQueryValue = searchQueryElement.value.trim();
	if (searchQueryValue) {
		
		return true;
	}

		
	else {
			return false;	
		}

}



/******************************************************************************/
/* Registering Event Handlers */
/******************************************************************************/
function attachHandlers() {
	let formElement = document.getElementById(SEARCH_FORM);
	

	if (formElement) {

		formElement.onsubmit = validateSearch;
	}
}

window.addEventListener("load", attachHandlers, false);
