<!-- Section Monstre Aléatoire -->
        <section class="mb-20">
          <div
            class="bg-gray-700 rounded-lg shadow-lg monster-card"
            data-monster-type="aquatique"
          >
            <div class="md:flex">
              <!-- Image du monstre -->
              <div class="w-full md:w-1/2 relative">
                <img
                  class="w-full h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none"
                  src="../app/images/<?php echo $randommonster['name']?>.png"
                  alt="<?php echo $randommonster['name']?>"
                />
                <div class="absolute top-4 right-4">
                  <button
                    class="text-white bg-gray-400 hover:bg-red-700 rounded-full p-2 transition-colors duration-300"
                    style="
                      width: 40px;
                      height: 40px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    "
                  >
                    <i class="fa fa-bookmark"></i>
                  </button>
                </div>
              </div>

              <!-- Détails du monstre -->
              <div class="p-6 md:w-1/2">
                <h2 class="text-3xl font-bold mb-2 creepster">
                  <?php echo $randommonster['name'] ;?>
                </h2>
                <p class="text-gray-300 text-sm mb-4">
                  <?php echo $randommonster ['description']?>
                </p>
                <div class="mb-4">
                  <strong class="text-white">Créateur:</strong>
                  <span class="text-red-400">Nom du Créateur</span>
                </div>
                <div class="mb-4">
                  <div>
                    <strong class="text-white">Type:</strong>
                    <span class="text-gray-300"><?php echo $randommonster['type']?></span>
                  </div>
                  <div>
                    <strong class="text-white">PV:</strong>
                    <span class="text-gray-300"><?php echo $randommonster['pv']?></span>
                  </div>
                  <div>
                    <strong class="text-white">Attaque:</strong>
                    <span class="text-gray-300"><?php echo $randommonster['attack']?></span>
                  </div>
                  <div>
                    <strong class="text-white">Défense:</strong>
                    <span class="text-gray-300"><?php echo $randommonster['defense']?></span>
                  </div>
                </div>
                <div class="mb-4">
                  <span class="text-yellow-400">★★★★☆</span>
                  <span class="text-gray-300 text-sm">(4.0/5.0)</span>
                </div>
                <div class="">
                  <a
                    href="?monsters=show&id=<?php echo $randommonster['id']?>"
                    class="inline-block text-white bg-red-500 hover:bg-red-700 rounded-full px-4 py-2 transition-colors duration-300">
                    Plus de détails
                    </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Section Derniers monstres -->
        <section class="mb-20">
          <h2 class="text-2xl font-bold mb-4 creepster">
            Derniers monstres ajoutés
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Monster Item -->
            <?php foreach ($lastmonsters as $lastmonster) :?>
            <article
              class="relative bg-gray-700 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 monster-card"
              data-monster-type="spectral">
              <img
                class="w-full h-48 object-cover rounded-t-lg"
                src="../app/images/<?php echo $lastmonster['name']?>.png"
                alt="<?php echo $lastmonster['name']?>"/>
              <div class="p-4">
                <h3 class="text-xl font-bold"><?php echo $lastmonster['name']?></h3>
                <h4 class="mb-2">
                  <a href="#" class="text-red-400 hover:underline">
                    Alex Smith
                  </a>
                </h4>
                <p class="text-gray-300 text-sm mb-2">
                  <?php echo $lastmonster['description']?>
                </p>
                <div class="flex justify-between items-center mb-2">
                  <div>
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-300 text-sm">(4.0/5.0)</span>
                  </div>
                  <span class="text-sm text-gray-300">Type: <?php echo $lastmonster['type']?></span>
                </div>
                <div class="flex justify-between items-center mb-4">
                  <span class="text-sm text-gray-300">PV: <?php echo $lastmonster['pv']?></span>
                  <span class="text-sm text-gray-300">Attaque: <?php echo $lastmonster['attack']?></span>
                </div>
                <div class="text-center">
                  <a
                    href="?monsters=show&id=<?php echo $lastmonster['id']?>"
                    class="inline-block text-white bg-red-500 hover:bg-red-700 rounded-full px-4 py-2 transition-colors duration-300">
                    Plus de détails
                  </a>
                </div>
              </div>
              <div class="absolute top-4 right-4">
                <button
                  class="text-white bg-gray-400 hover:bg-red-700 rounded-full p-2 transition-colors duration-300"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    justify-content: center;
                    align-items: center;">
                  <i class="fa fa-bookmark"></i>
                </button>
              </div>
            </article>
            <?php endforeach?>
            <!-- Répétez pour d'autres monstres -->
          </div>
        </section>