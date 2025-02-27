<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de Réservation | WSSlni</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Barre de navigation -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-indigo-600">WSSlni</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/profile" class="text-indigo-600 hover:text-indigo-800 transition">Mon Profil</a>
                        <a href="/reservations" class="text-indigo-600 hover:text-indigo-800 transition">Mes Réservations</a>
                        <a href="/aide" class="text-indigo-600 hover:text-indigo-800 transition">Aide</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenu principal -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- En-tête de page -->
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Détails de la Réservation</h2>
                <p class="text-gray-600">Réservation #REF-2023-0542</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Colonne de gauche: Détails du chauffeur et de la réservation -->
                <div class="lg:w-1/2 space-y-6">
                    <!-- Carte du chauffeur -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Informations du Chauffeur</h3>
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Jean Dupont" class="w-20 h-20 rounded-full object-cover border-2 border-indigo-600">
                            <div>
                                <h4 class="text-xl font-bold">Jean Dupont</h4>
                                <div class="flex items-center text-yellow-500 my-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="text-gray-600 ml-2">4.5/5 (128 avis)</span>
                                </div>
                                <p class="text-gray-600"><i class="fas fa-car mr-2"></i>Toyota Corolla - Gris</p>
                            </div>
                        </div>
                        <div class="space-y-2 border-t pt-3">
                            <p class="text-gray-700"><i class="fas fa-phone-alt mr-2 text-indigo-600"></i>+212 6XX-XXXXXX</p>
                            <p class="text-gray-700"><i class="fas fa-envelope mr-2 text-indigo-600"></i>jean.dupont@email.com</p>
                            <p class="text-gray-700"><i class="fas fa-id-card mr-2 text-indigo-600"></i>Permis: MR-87654321</p>
                        </div>
                    </div>
                    
                    <!-- Carte des détails de la réservation -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Détails du Trajet</h3>
                        
                        <div class="space-y-4">
                            <!-- Status de la réservation -->
                            <div class="bg-green-50 p-3 rounded-lg border border-green-200 flex items-center">
                                <div class="bg-green-500 p-2 rounded-full mr-3">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-green-800">Réservation Confirmée</p>
                                    <p class="text-sm text-green-600">Le chauffeur arrivera à l'heure prévue</p>
                                </div>
                            </div>
                            
                            <!-- Trajet -->
                            <div class="flex">
                                <div class="mr-4 relative">
                                    <div class="w-3 h-3 rounded-full bg-indigo-600"></div>
                                    <div class="absolute top-3 bottom-3 left-1.5 w-0.5 bg-gray-300"></div>
                                    <div class="w-3 h-3 rounded-full bg-indigo-600 absolute bottom-0"></div>
                                </div>
                                <div class="space-y-6 flex-1">
                                    <div>
                                        <p class="font-medium">Point de départ</p>
                                        <p class="text-gray-700">Aéroport Mohammed V, Terminal 1</p>
                                        <p class="text-sm text-gray-500">02/03/2025 - 14:30</p>
                                    </div>
                                    <div>
                                        <p class="font-medium">Destination</p>
                                        <p class="text-gray-700">Centre-ville Casablanca, Hôtel Royal</p>
                                        <p class="text-sm text-gray-500">Heure d'arrivée estimée: 15:15</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Informations supplémentaires -->
                            <div class="border-t pt-4 mt-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-sm text-gray-500">Distance</p>
                                        <p class="font-medium">35 km</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Durée estimée</p>
                                        <p class="font-medium">45 min</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Tarif</p>
                                        <p class="font-medium">250 MAD</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Méthode de paiement</p>
                                        <p class="font-medium">Espèces</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Actions -->
                            <div class="border-t pt-4 mt-4 flex justify-between">
                                <a href="/reservations/cancel/1" class="inline-flex items-center text-red-600 hover:text-red-800">
                                    <i class="fas fa-times-circle mr-2"></i>
                                    Annuler la réservation
                                </a>
                                <a href="tel:+2126XXXXXXXX" class="inline-flex items-center text-indigo-600 hover:text-indigo-800">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    Appeler le chauffeur
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Colonne de droite: Carte Google Maps (vide pour l'instant) -->
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-lg shadow-md h-full min-h-[600px] flex items-center justify-center">
                        <div class="text-center p-6">
                            <div class="text-gray-400 mb-3">
                                <i class="fas fa-map-marker-alt text-4xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-700">Emplacement du Chauffeur</h3>
                            <p class="text-gray-500 mt-2">La carte de localisation en temps réel sera affichée ici</p>
                            <p class="text-sm text-gray-400 mt-4">Intégration Google Maps API à venir</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>