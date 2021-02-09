# Laravel-news-blog

## Technologies: Laravel, Mysql, Tailwind

### Current landing page layout

![Landing page screenshot](https://github.com/MetaMan13/Laravel-news-blog/blob/main/public/images/screenshots/latest_welcome_screenshot.jpg)

### UI Structure Update #1

![Landing page screenshot](https://github.com/MetaMan13/Laravel-news-blog/blob/main/public/images/screenshots/ui-structute-update.png)

### Route structure

    Homepage( welcome view ) => route['/']

    ------------------|
    USER ROUTES START
    ------------------|

    RESTfull conventions

    ROUTE: ['/user']

        Request type: POST ['create a new user']
    
    ROUTE: ['user/{$id}']

        Request type: GET ['read user profile with the id of {$id}]

        Request type: PUT ['update information about the user with the id of {$id}']

            - User must be singed in and can only edit their profile information, request to any other user edit route should display an error message

        Request type: DELETE ['delete user profile with the id of {$id}']

            - User must be signed in to acces this route
            - No questions asked about the reason the user is deleting the account
            - Give the user an option to "Go back/Cancel" the account deletion
            - Display " Are you sure message? " when the user clicks the delete my account button
            - When the "delete my account" button is pressed request that the user log's in to the account
            - If success delete all account data including blogs, comments
            - Else redirect back to the user profile
            - Redirect to "Sorry to see you go" view

    ------------------|
    USER ROUTES END
    ------------------|


    ------------------|
    POST ROUTES START
    ------------------|

    RESTfull conventions

    ROUTE: ['/post']

        Request type: POST ['create a new post']
    
    ROUTE: ['post/{$id}']

        Request type: GET ['read post with the id of {$id}]

        Request type: PUT ['update information about the post with the id of {$id}']

        Request type: DELETE ['delete post with the id of {$id}']

    ------------------|
    POST ROUTES END
    ------------------|