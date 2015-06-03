# Test Case 1 : Registration
## 1.1 Manual Registration from site
### Inputs
* Shalin Parmar
* shalin@gmail.com
* shalin
* student
* Subscribed for newsletter

### Outputs
* Successful registration

## 1.2
### Inputs
* Shalin Parmar
* shalingmail.com
* shalin
* student
* Subscribed for newsletter

### Outputs
* Asks to enter proper email address 

## 1.3 Registration, Login with Google
### Inputs
* Pressed Login with Google button

### Outputs
* Unsuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth	

## 1.4 Registration, Login with Facebook
### Inputs
* Pressed Login with Facebook button

### Outputs
* UnSuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth	

# Test Case 2 : Login 
## 2.1 Manually
### Inputs
* shalin@gmail.com
* shalin

### Output
* Successful login

## 2.2
### Inputs
* shalin@gmail.com
* asdfgh

### Output
* UnSuccessful login

## 2.3 Registration, Login with Facebook
### Inputs
* Pressed Login with Facebook button

### Outputs
* UnSuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth

## 2.4 Registration, Login with Google
### Inputs
* Pressed Login with Google button

### Outputs
* UnSuccessful registration
* Fatal Error : Unsupported or undefined Opauth strategy - auth

# Test Case 3 : Taking a quiz
## 3.1 Taking quiz for the first time
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
* Flash of Successful submission stays there, it does not fade away.

## 3.2 Giving improper inputs-1
### Inputs
* not selecting any subject
* proceed

### Outputs
* Asks to select a subject

## 3.3 Giving improper inputs-2
### Inputs
* selected 10th english
* proceed
* No option for any question selected
* Submit

### Outputs
* Successful submission of quiz
* Report of quiz is properly generated and displayed

### Issue
* Flash of Successful submission stays there, it does not fade away.

## 3.4 When selected subject does not have questions

### Inputs
* Selected 11th physics
* Proceed
* Submit

### Outputs
* After proceeding warnings appear at the place of question
* Clicking submit button returns error :  Missing view - The view for TestResultsController::generate_result() was not found.

# Test case 4 : Get Report

## 4.1
### Input
* Press Get Report button

### Output
* Returns proper test report.

# Test case 5 : Logout
## 5.1
### Input
* Press Logout button

### Output
* Successfully logs out user from the site

# Test case 6 : Newsletter
##6.1
### Input
* None

### Output
* Newly added newsletter does not align properly.

# Test case 7 : Upload Profile Picture
##7.1
### Input
* Image of size 6.94 MB

### Output
* Error

### Issue
* Unable to upload image
##7.2
### Input
* Image of size 247 KB

### Output
* Image uploaded successfully