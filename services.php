<section class="services">
    <h2>SOLUCIONES CREATIVAS</h2>
    <p>Sin importar cuál sea tu negocio, nuestro equipo puede hacer todo desde cero.</p>
    <div class="service-container">
        <?php 
            $services = [
                ['title' => 'DISEÑO', 'description' => 'Creamos diseños según tus necesidades.', 'image' => 'img/idea_01.png'],
                ['title' => 'DESARROLLO', 'description' => 'Nuestros programadores te garantizan la perfección.', 'image' => 'img/idea_02.png'],
                ['title' => 'EDICIÓN DE LIBROS', 'description' => 'Que el producto final llegue a tus clientes.', 'image' => 'img/idea_03.png'],
            ];

            foreach ($services as $service) {
                echo '<div class="service">';
                echo '<img src="' . $service['image'] . '" alt="' . $service['title'] . '">';
                echo '<h3>' . $service['title'] . '</h3>';
                echo '<p>' . $service['description'] . '</p>';
                echo '</div>';
            }
        ?>
    </div>
</section>