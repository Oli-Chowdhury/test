Feature: Login

@api 

Scenario: A user can login

Given I am an anonymous user
Given I am not logged in
Given I am at '/user/login'
When I visit "/wysiwyg-module-ckeditor/273551164"
Given I am at "/user/login"
Then I should not see the button "LOG IN"

