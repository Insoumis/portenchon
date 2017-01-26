

<ul class="menu">
    <li class="home <?= isset($activeTab['home']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['home']) ? '/' : '#top'; ?>" title="Accueil">Accueil</a>
    </li>
    <li class="websites <?= isset($activeTab['websites']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['websites']) ? '/sites-internet' : '#top'; ?>" title="Sites Internet">Sites Internet</a>
    </li>
    <li class="youtube <?= isset($activeTab['youtube']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['youtube']) ? '/youtube' : '#top'; ?>" title="YouTube">YouTube</a>
    </li>
    <li class="twitter <?= isset($activeTab['twitter']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['twitter']) ? '/twitter' : '#top'; ?>" title="Twitter">Twitter</a>
    </li>
    <li class="facebook <?= isset($activeTab['facebook']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['facebook']) ? '/facebook' : '#top'; ?>" title="Facebook">Facebook</a>
    </li>
    <li class="others <?= isset($activeTab['others']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['others']) ? '/autres-ressources' : '#top'; ?>" title="Autres ressources">Autres ressources</a>
    </li>
    <!-- Contact désactivé jusqu'à mise en place d'un captcha -->
    <!--
        <li class="contact <?php // echo isset($activeTab['contact']) ? $activeTab['contact'] : null; ?>">
            <a href="#nous-contacter" title="Autres ressources">Nous contacter</a>
        </li>
    -->
</ul>