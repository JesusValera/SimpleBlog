<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class IndexController extends BaseController
{
    public function invoke(Request $request): Response
    {
        return new Response($this->twig->render('index.html.twig', ['posts' => $this->getPosts()]));
    }

    private function getPosts(): array
    {
        return [
            'post_id_1' => [
                'title'      => 'Lorem Ipsum 1',
                'slug'       => 'lorem-ipsum-1',
                'updated_at' => new \DateTimeImmutable(),
                'content'    => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            ],
            'post_id_2' => [
                'title'      => 'Lorem Ipsum 2',
                'slug'       => 'lorem-ipsum-2',
                'updated_at' => new \DateTimeImmutable(),
                'content'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit purus, viverra non libero sit amet, ornare sollicitudin mauris. Sed vestibulum scelerisque nisi eu congue. Duis a lacinia lorem. Aenean hendrerit at ante sed suscipit. Vestibulum vel est sed urna viverra malesuada eu et erat. Proin eu massa at dui iaculis accumsan. Mauris vel leo iaculis ex dictum scelerisque. Donec urna nibh, finibus ac ex ac, dignissim hendrerit ante. Proin vel nunc et arcu dictum aliquam nec nec nunc. Aliquam tempus lobortis leo, sit amet mollis libero lacinia non. Maecenas suscipit enim eget ipsum rhoncus, at ultrices erat accumsan. Phasellus.',
            ],
            'post_id_3' => [
                'title'      => 'Lorem Ipsum 3',
                'slug'       => 'lorem-ipsum-3',
                'updated_at' => new \DateTimeImmutable(),
                'content'    => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a consectetur quam. Aliquam viverra imperdiet nulla, sit amet rutrum ipsum commodo non. Vestibulum id libero a urna tristique tincidunt vel et mauris. Nam quis pretium tellus. Vivamus vitae convallis ipsum. Integer et metus sit amet turpis interdum lacinia. Sed sagittis velit lacus. Duis volutpat quam quam, ac vulputate tortor viverra eget. Nulla eu luctus sapien, id lacinia nibh. Nullam a justo odio. Sed vulputate dictum ante ut congue.' . PHP_EOL . 'Vivamus at nunc a est sagittis ullamcorper. Praesent eget pellentesque ante. Integer id nisi condimentum, bibendum ligula vitae, placerat leo. Sed orci.',
            ],
            'post_id_4' => [
                'title'      => 'Lorem Ipsum 4',
                'slug'       => 'lorem-ipsum-4',
                'updated_at' => new \DateTimeImmutable(),
                'content'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor viverra est vitae lobortis. Pellentesque ac varius justo, eu maximus urna. Fusce faucibus orci commodo, porttitor orci nec, egestas mi. Mauris convallis, mauris id dapibus tempus, quam neque tincidunt nunc, non molestie mi libero sed tortor. Ut aliquet vitae mauris quis gravida. Fusce dignissim eleifend diam quis maximus. Nulla eget felis urna. Aliquam rutrum ex ut lectus rhoncus, et eleifend nunc pulvinar. Praesent lobortis, justo vel tincidunt interdum, quam urna finibus erat, posuere laoreet lacus tellus sit amet odio. Integer luctus velit vitae posuere lobortis. Phasellus gravida suscipit bibendum. Proin.',
            ],
        ];
    }
}
