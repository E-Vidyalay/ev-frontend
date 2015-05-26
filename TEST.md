# Test Case 1 : Registration
## Manual Registration from site
### Inputs
* Shalin Parmar
* shalin@gmail.com
* shalin
* student
* Subscribed for newsletter

### Outputs
* Successful registration

## Registration, Login with Google
### Inputs
* Pressed Login with Google button

### Outputs
* Unsuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth	

## Registration, Login with Facebook
### Inputs
* Pressed Login with Facebook button

### Outputs
* UnSuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth	

# Test Case 2 : Login 
## Manually
### Inputs
* shalin@gmail.com
* shalin

### Output
* Successful login

### Inputs
* shalin@gmail.com
* asdfgh

### Output
* UnSuccessful login

## Registration, Login with Facebook
### Inputs
* Pressed Login with Facebook button

### Outputs
* UnSuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth

## Registration, Login with Google
### Inputs
* Pressed Login with Google button

### Outputs
* UnSuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth

# Test Case 3 : Taking a quiz
## Taking quiz for the first time
### Inputs
* selected 10th english
* Q1 - option 1,2,3
* Q2 - option 2
* Q3 - option 2,3
* Q4 - option 1
* Q5 - option 1
* Q6 - option 1
* Q7 - option 2
* Q8 - option 1
* Q9 - option 1
* Q10 - option 1,4
* Submit

### Outputs
* Successful submission of quiz
* Report of quiz is properly displayed

### Issue
* Flash of Successful sumbission stays there, it does not fade away.

## Giving improper inputs-1
### Inputs
* not selecting any subject
* proceed

### Outputs
* Asks to select a subject

## Giving improper inputs-2
### Inputs
* selected th english
* proceed
* No option for any question
* Submit

### Outputs
* Successful submission of quiz
* Proper report generated
* Report of quiz is properly displayed

### Issue
* Flash of Successful sumbission stays there, it does not fade away.

# Test case 4 : Get Report

### Input
* Press Get Report button

### Output
* Returns proper test report.

# Test case 5 : Logout

### Input
* Press Get Logout button

### Output
* Successfully logs out user from the site