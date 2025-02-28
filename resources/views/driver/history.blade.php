<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Courses | WSSlni</title>
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
                        <a href="/driver/profile" class="text-indigo-600 hover:text-indigo-800 transition">Mon Profil</a>
                        <a href="/driver/courses" class="text-indigo-600 font-medium underline hover:text-indigo-800 transition">Mes Courses</a>
                        <a href="/driver/disponibilite" class="text-indigo-600 hover:text-indigo-800 transition">Disponibilité</a>
                        <a href="/driver/statistiques" class="text-indigo-600 hover:text-indigo-800 transition">Statistiques</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenu principal -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- En-tête de page -->
            <div class="mb-6 flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Historique des Courses</h2>
                    <p class="text-gray-600">Consultez toutes vos courses passées et futures</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="all">Toutes les courses</option>
                        <option value="completed">Terminées</option>
                        <option value="canceled">Annulées</option>
                        <option value="upcoming">À venir</option>
                    </select>
                    <select class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="last30">30 derniers jours</option>
                        <option value="last90">90 derniers jours</option>
                        <option value="year">Cette année</option>
                        <option value="all">Toutes les dates</option>
                    </select>
                </div>
            </div>

            <!-- Tableau des réservations -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Passager</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trajet</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date et heure</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Course 1 (À venir) -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/25.jpg" alt="Amina Khalid">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Amina Khalid</div>
                                        <div class="text-sm text-gray-500">+212 6XX-XXXXXX</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 mb-1">Gare Casa Voyageurs → Aïn Diab</div>
                                <div class="text-xs text-gray-500">Distance: 12 km</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">27/02/2025</div>
                                <div class="text-sm text-gray-500">14:30</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    À venir
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/driver/courses/accept/1" class="text-green-600 hover:text-green-900 mr-3">
                                    <i class="fas fa-check-circle"></i> Accepter
                                </a>
                                <a href="/driver/courses/reject/1" class="text-red-600 hover:text-red-900">
                                    <i class="fas fa-times-circle"></i> Refuser
                                </a>
                            </td>
                        </tr>
                        
                        <!-- Course 2 (Terminée) -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Karim Benani">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Karim Benani</div>
                                        <div class="text-sm text-gray-500">+212 6XX-XXXXXX</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 mb-1">Aéroport Mohammed V → Hôtel Sofitel</div>
                                <div class="text-xs text-gray-500">Distance: 35 km</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">25/02/2025</div>
                                <div class="text-sm text-gray-500">10:15</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Terminée
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/driver/courses/details/2" class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-eye"></i> Détails
                                </a>
                            </td>
                        </tr>
                        
                        <!-- Course 3 (Terminée) -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/42.jpg" alt="Nadia Tazi">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Nadia Tazi</div>
                                        <div class="text-sm text-gray-500">+212 6XX-XXXXXX</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 mb-1">Marina Shopping → Quartier Bourgogne</div>
                                <div class="text-xs text-gray-500">Distance: 8 km</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">24/02/2025</div>
                                <div class="text-sm text-gray-500">18:45</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Terminée
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/driver/courses/details/3" class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-eye"></i> Détails
                                </a>
                            </td>
                        </tr>
                        
                        <!-- Course 4 (Annulée) -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/55.jpg" alt="Hassan Alaoui">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Hassan Alaoui</div>
                                        <div class="text-sm text-gray-500">+212 6XX-XXXXXX</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 mb-1">Médina de Rabat → Gare de Kénitra</div>
                                <div class="text-xs text-gray-500">Distance: 40 km</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">22/02/2025</div>
                                <div class="text-sm text-gray-500">09:00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Annulée
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/driver/courses/details/4" class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-eye"></i> Détails
                                </a>
                            </td>
                        </tr>
                        
                        <!-- Course 5 (Terminée) -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/22.jpg" alt="Omar Chaoui">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Omar Chaoui</div>
                                        <div class="text-sm text-gray-500">+212 6XX-XXXXXX</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 mb-1">Technopolis → Hay Riad</div>
                                <div class="text-xs text-gray-500">Distance: 15 km</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">20/02/2025</div>
                                <div class="text-sm text-gray-500">17:30</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Terminée
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/driver/courses/details/5" class="text-indigo-600 hover:text-indigo-900">
                                    <i class="fas fa-eye"></i> Détails
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>