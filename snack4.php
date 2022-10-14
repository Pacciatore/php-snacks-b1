<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->

<?php

$mainParagraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda sint odit ipsam accusantium tenetur, esse facilis totam! Porro dolores vero ut ullam incidunt, aperiam dolorem repellat eveniet aliquid, odio earum!
Accusamus commodi itaque rem quaerat sit ut, vero, facere nostrum voluptatem ea vitae molestiae? Nostrum iste dolorum illo magnam ab, illum asperiores qui itaque, architecto rem cumque laudantium corporis? Officiis.
Enim ea quisquam fugit laudantium incidunt itaque qui, accusamus iste tenetur non dolores in sunt aliquid unde dolor, maxime blanditiis a dicta ad et expedita iusto. Nostrum repudiandae veniam totam.
Dicta consectetur repudiandae illo cum officia laudantium nisi cupiditate ab numquam voluptatum beatae unde saepe, rem facilis quibusdam amet soluta modi inventore libero odio, optio odit incidunt error! Iure, temporibus?
Magnam ab iure ut fuga, placeat corporis aut doloremque? Asperiores nam voluptatum non quos reiciendis officia in, omnis animi. Labore dicta ipsa voluptatum, quis voluptate tenetur enim! Ut, veritatis officiis.
Veniam cupiditate eos vero accusamus quod non nulla tempora, ad, maiores consequatur voluptas autem! Veritatis nisi dolore perferendis fugiat ipsa quisquam, iste placeat similique a est ea, totam illo. Ab?
Exercitationem eaque nulla nesciunt hic amet sint quia optio quae alias? Ullam perspiciatis totam architecto sed officiis aspernatur repellat necessitatibus, temporibus voluptatem numquam voluptatum aliquam quod cupiditate, adipisci placeat illum.
Voluptas, repudiandae voluptatum quaerat reprehenderit temporibus ex tempore ipsam iste facere laborum in nulla harum maiores expedita. Perferendis, fuga. Nisi dignissimos veniam minus laborum voluptate commodi ullam iste explicabo recusandae.
Beatae suscipit incidunt numquam alias nesciunt, laborum officiis magni vero distinctio a odit quaerat nemo eligendi? Cumque, quaerat minus dolores optio numquam, fuga repellendus odio dolore ea omnis, atque quo.
Quidem unde dolorem ab, laudantium magni voluptas mollitia ipsa facere similique alias corrupti sed porro, explicabo, earum vero possimus quaerat excepturi eum in. Laboriosam inventore ipsam iste enim at nostrum?';

?>

<h1>Suddivisione paragrafo</h1>

<?php

$array = explode('.', $mainParagraph);

for ($i = 0; $i < count($array); $i++) {
    $element = $array[$i];
?>

    <p> <?= $element . '.' ?> </p>

<?php
}

?>