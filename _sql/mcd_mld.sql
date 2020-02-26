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

        <ASSOCIATION>
            rattaché 
                utilisateur 1,1
                profil 1,n 
            
            appartenir  
                lecon 1,n 
                catégorie 1,n 

            consulter (date de validité )
                utilisateur 1,n 
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
            -catégorie (FK)
        
        consulter 
            -id (PK)
            -date_de_validation
            -lecon (FK)
            -utilisateur (FK)

        appartenir 
            -id
            -lecon (FK)
            -catégorie (FK)
        

    </TABLES>
</MLD>