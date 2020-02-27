<MCD>
    <ENTITES>
        utilisateur
            -id
            -dénomination ou nom
            -email
            -mot de passe 

        profil
            -id 
            -nom

        catégorie (mots-clés)
            -id
            -nom

        lecon
            -id
            -libelle
            -src


        fichier 
            -id
            -nom (alt)
            

        <ASSOCIATION>
            posséde  
                utilisateur 1,1
                profil 1,n 
            
            appartenir  
                lecon 1,n 
                catégorie 1,n 

            consulter (date de validité )
                utilisateur 1,n 
                lecon 1,n 

            rattaché 
                fichier 1,1 
                lecon 1,n


            
        </ASSOCIATION>
    </ENTITES>

</MCD>
<MLD>
    <TABLES>
        utilisateur
            -id (PK)
            -dénomination ou nom
            -email
            -mot de passe 
            -profil (FK)

        profil
            -id (PK)
            -nom

        catégorie (thématique)
            -id (PK)
            -nom

        lecon
            -id (PK)
            -libelle
            -src
        
        consulter 
            -id (PK)
            -date_de_validation
            -lecon (FK)
            -utilisateur (FK)

        appartenir 
            -id
            -lecon (FK)
            -catégorie (FK)

        fichier
            -id 
            -nom
            -lecon (FK)
        

    </TABLES>
</MLD>