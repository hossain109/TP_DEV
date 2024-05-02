# ✨ TP-DevOps ✨ 
## Presentation
Dear DevOps,
Here u can find a basic project about a users-list.

## Usage
To work well, you need to clone and create a branch with your pseudo as branch name.

## Jobs
You need todo these :
 - Create Interfaces
   - IUtilisateur
     - GetIdentity() : string
     - GetEMail() : string
     - GetAdresses() : array
     - __toString()
    - IAdresse
      - __toString()

 - Create classes
   - Utilisateur : IUtilisateur
   - Adresse : IAdresse

 - Create main page
   - Must contains
     - textbox for username and password
     - button for send form

 - Create script file
   - Procedural and consumptions
     - Consume form datas
     - Need use DbLoader to load users datas
     - Allow acces or loop to login page (main page)
     - If allow, show user informations and store in session the user object

> Password are dynamicly created and store on demand in text file on root folder
> JSon file is edited during password binding to contains hashed password

## Cheats
To clone :
Place you CLI in a workspace folder and execute this command :
```sh
git clone https://github.com/firstruner/TP_Git.git
```

To create branch :
In the project folder, and only in, execute  :
```sh
git checkout -b [YOUR_PROFILE]
```

Where [YOUR_PROFILE] represent your profile id

## Helpers
![Git Process](https://i.postimg.cc/MZQhcSt1/Git-Quick-Start.jpg)

![Git Cheats](https://i.postimg.cc/90DX9N8r/git-cheat-sheet-large01.png)

![HTML Cheats](https://i.postimg.cc/wMnqQcZF/Ultimate-HTML-Cheatsheet.png)

![PHP Cheats](https://i.postimg.cc/gc72pmjR/Ultimate-PHP-Cheatsheet.png)

## License

### Proprietary

You can use and consume only during your training
