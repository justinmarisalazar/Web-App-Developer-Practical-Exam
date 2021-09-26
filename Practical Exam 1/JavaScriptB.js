// Create a function that will parse and display the JSON values on a CONTACT FORM (text field, radio button, checkbox)

// String to be parsed
const str = `{
                "success":true,
                "employees":
                [
                    {
                        "id":"1",
                        "firstName":"John",
                        "lastName":"Doe",
                        "birthday":"1990-05-07",
                        "gender":
                        {
                            "male":true,
                            "female":false
                        },
                        "knownLanguage":
                        [
                            "English",
                            "Japanese",
                            "Chinese"
                        ]
                    },
                    {
                        "id":"2",
                        "firstName":"Lina",
                        "lastName":"Art",
                        "birthday":"1994-08-05",
                        "gender":
                        {
                            "male":false,
                            "female":true
                        },
                        "knownLanguage":
                        [
                            "English",
                            "Japanese"
                        ]
                    }
                ]
            }`;
            
//Function that displays the first record in alphabetical order in contact form
function parseIntoContactForm(str)
{
    const obj = JSON.parse(str); // Parses the string into an object
    
    // Declaration of variables for the ID
    var idLine = document.createElement("p");
    var idText = document.createTextNode("ID: ");
    var idField = document.createElement("input");
    idField.type = "number";
    idField.readOnly = true;
    idLine.appendChild(idText);
    idLine.appendChild(idField);
    
    // Declaration of variables for the First Name
    var firstNameLine = document.createElement("p");
    var firstNameText = document.createTextNode("First Name: ");
    var firstNameField = document.createElement("input");
    firstNameField.type = "text";
    firstNameField.readOnly = true;
    firstNameLine.appendChild(firstNameText);
    firstNameLine.appendChild(firstNameField);
    
    // Declaration of variables for the Last Name
    var lastNameLine = document.createElement("p");
    var lastNameText = document.createTextNode("Last Name: ");
    var lastNameField = document.createElement("input");
    lastNameField.type = "text";
    lastNameField.readOnly = true;
    lastNameLine.appendChild(lastNameText);
    lastNameLine.appendChild(lastNameField);
    
    // Declaration of variables for the Birthday
    var bdayLine = document.createElement("p");
    var bdayText = document.createTextNode("Birthday: ");
    var bdayField = document.createElement("input");
    bdayField.type = "date";
    bdayField.readOnly = true;
    bdayLine.appendChild(bdayText);
    bdayLine.appendChild(bdayField);
    
    // Declaration of variables for the Gender
    var genderLine = document.createElement("p");
    var genderText = document.createTextNode("Gender: ");
    var maleText = document.createTextNode("Male");
    var femaleText = document.createTextNode("Female");
    var maleRadio = document.createElement("input");
    maleRadio.type = "radio";
    maleRadio.disabled = "true";
    var femaleRadio = document.createElement("input");
    femaleRadio.type = "radio";
    femaleRadio.disabled = "true";
    genderLine.appendChild(genderText);
    genderLine.appendChild(maleRadio);
    genderLine.appendChild(maleText);
    genderLine.appendChild(femaleRadio);
    genderLine.appendChild(femaleText);
    
    // Declaration of variables for the Known Languages
    var knownLanguageLine = document.createElement("p");
    var knownLanguageText = document.createTextNode("Known Language: ");
    var englishText = document.createTextNode("English");
    var japaneseText = document.createTextNode("Japanese");
    var chineseText = document.createTextNode("Chinese");
    var englishCheckbox = document.createElement("input");
    englishCheckbox.type = "checkbox";
    englishCheckbox.disabled = "true";
    englishCheckbox.value = "English";
    var japaneseCheckbox = document.createElement("input");
    japaneseCheckbox.type = "checkbox";
    japaneseCheckbox.disabled = "true";
    japaneseCheckbox.value = "Japanese";
    var chineseCheckbox = document.createElement("input");
    chineseCheckbox.type = "checkbox";
    chineseCheckbox.disabled = "true";
    knownLanguageLine.appendChild(knownLanguageText);
    knownLanguageLine.appendChild(englishCheckbox);
    knownLanguageLine.appendChild(englishText);
    knownLanguageLine.appendChild(japaneseCheckbox);
    knownLanguageLine.appendChild(japaneseText);
    knownLanguageLine.appendChild(chineseCheckbox);
    knownLanguageLine.appendChild(chineseText);
    
    const lastName = []; // Array for storing the last name of each record
    
    // For loop that inserts the last name of each record into the array
    for(i = 0; i < obj.employees.length; i++)
    {
        lastName.push(obj.employees[i].lastName);
    }
    
    lastName.sort(); // Sorts the array in alphabetical order
    var recordToShow; // Variable for the record to be shown
    
    // For loop that stores the first record into the variable
    for(i = 0; i < obj.employees.length; i++)
    {
        if(lastName[0] == obj.employees[i].lastName)
            recordToShow = obj.employees[i];
    }
    
    // Displays all information of the selected record
    document.body.appendChild(idLine);
    document.body.appendChild(firstNameLine);
    document.body.appendChild(lastNameLine);
    document.body.appendChild(bdayLine);
    document.body.appendChild(genderLine);
    document.body.appendChild(knownLanguageLine);
    idField.value = recordToShow.id;
    firstNameField.value = recordToShow.firstName;
    lastNameField.value = recordToShow.lastName;
    bdayField.value = recordToShow.birthday;
    maleRadio.checked = recordToShow.gender.male;
    femaleRadio.checked = recordToShow.gender.female;
    if(englishCheckbox.value == recordToShow.knownLanguage[0])
        englishCheckbox.checked = true;
    if(japaneseCheckbox.value == recordToShow.knownLanguage[1])
        japaneseCheckbox.checked = true;
    if(chineseCheckbox.value == recordToShow.knownLanguage[2])
        chineseCheckbox.checked = true;
}

parseIntoContactForm(str); // Calls the function