<section class="mb-20">
          <h2 class="text-2xl font-bold mb-4 creepster">
            Liste des monstres
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Monster Item -->
            <?php foreach ($monsters as $monster) :?>
            <article
              class="relative bg-gray-700 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 monster-card"
              data-monster-type="<?php echo $monster['type']?>">
              <img
                class="w-full h-48 object-cover rounded-t-lg"
                src="../app/images/<?php echo $monster['name']?>.png"
                alt="<?php echo $monster['name']?>"/>
              <div class="p-4">
                <h3 class="text-xl font-bold"><?php echo $monster['name']?></h3>
                <h4 class="mb-2">
                  <a href="#" class="text-red-400 hover:underline">
                    Alex Smith
                  </a>
                </h4>
                <p class="text-gray-300 text-sm mb-2">
                  <?php echo $monster['description']?>
                </p>
                <div class="flex justify-between items-center mb-2">
                  <div>
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-300 text-sm">(4.0/5.0)</span>
                  </div>
                  <span class="text-sm text-gray-300">Type: <?php echo $monster['type']?></span>
                </div>
                <div class="flex justify-between items-center mb-4">
                  <span class="text-sm text-gray-300">PV: <?php echo $monster['pv']?></span>
                  <span class="text-sm text-gray-300">Attaque: <?php echo $monster['attack']?></span>
                </div>
                <div class="text-center">
                  <a
                    href="?monsters=show&id=<?php echo $monster['id']?>"
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
          </div>
        </section>
<!-- Pagination -->
<?php if ($TOTAL_PAGES > 1): ?>
  <div class="flex justify-center mt-8 space-x-2">

    <!-- Bouton "Précédent" -->
    <a
      href="?monsters=<?= $CURRENT_PAGE - 1 ?>"
      class="px-4 py-2 rounded-full font-semibold 
            <?= $CURRENT_PAGE <= 1 
              ? 'bg-gray-300 text-gray-400 cursor-not-allowed opacity-50 pointer-events-none' 
              : 'bg-gray-300 text-gray-700 hover:bg-gray-400' ?>">
      Précédent
    </a>

    <!-- Pages numérotées -->
    <?php for ($i = 1; $i <= $TOTAL_PAGES; $i++): ?>
      <a
        href="?monsters=<?= $i ?>"
        class="px-4 py-2 rounded-full font-semibold transition duration-150
              <?= $i === $CURRENT_PAGE 
                ? 'bg-red-800 text-white shadow' 
                : 'bg-gray-200 text-gray-700 hover:bg-red-900 hover:text-white' ?>">
        <?= $i ?>
      </a>
    <?php endfor; ?>

    <!-- Bouton "Suivant" -->
    <a
      href="?monsters=<?= $CURRENT_PAGE + 1 ?>"
      class="px-4 py-2 rounded-full font-semibold 
            <?= $CURRENT_PAGE >= $TOTAL_PAGES 
              ? 'bg-gray-300 text-gray-400 cursor-not-allowed opacity-50 pointer-events-none' 
              : 'bg-gray-300 text-gray-700 hover:bg-gray-400' ?>">
      Suivant
    </a>

  </div>
<?php endif; ?>

