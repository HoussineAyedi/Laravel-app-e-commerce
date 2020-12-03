{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
           

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Produits
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">liste des produits</a></li>
                    <li><a href="{{route('product.create')}}">Ajouter un produit </a></li>
                </ul>
            </li>
           
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categories
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Gérer les categories</a></li>
                </ul>
            </li>
           



            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list">
                    </i> 
                    Contacts
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
            <li>
                <a href="{{route('admin.newslettersub')}}">
                    Liste des inscrits aux Newsletters
                </a>
            </li> 

                <li>
                <a href="{{route('admin.contacts')}}">
                    La liste des contacts
                </a>
            </li>
                   
                </ul>
            


            </li>




            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    Gérer les commandes
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Commandes en attentes </a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Commandes Terminés </a></li>
                    <li><a href="{{url('admin/orders')}}">Toutes les commandes </a></li>
                </ul>
            </li>


 <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    Caracteristique sous categorie 
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
               
                    <li><a href="{{route('souscategorie.index')}}">Souscategories characteristics </a></li> 
                
                </ul>
            </li>








        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->