<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('articles')->truncate();

        DB::table('articles')->insert(array(
            array(
                'title'            => 'Enhance Your Quilt with Sewing Quilting Machines',
                'slug'             => Str::slug('quilt-with-quilting-machines'),
                'content'          => '
             <p>Quilting started as a social activity. Farm wives got together when they weren\'t performing chores. They made bed coverings, curtains, petticoats and other articles. Patchwork was a result of a fabric shortage. Old items would be woven into a single fabric, producing wondrous designs. That form has become everything from an expression of art to a charitable statement.</p>

<p>Today quilting is as much a hobby for enjoyment as it is a professional endeavor. Whether for fun or profit, quilting is a great opportunity to create. Nothing has made these projects easier than the quilting sewing machine.</p>

<h2 itemprop="hasPart about">Types of Quilting</h2>
<p>Patchwork, or pieced, quilting is only one form of the art, usually the one most of us begin with. Most quilters tend to stay within traditional patterns that include blocks of rectangles and squares, rarely stepping outside of those shapes.</p>

<p>Fortunately, a quilting sewing machine leads to venturing into other styles, especially if one utilizes a more advanced model that allows for easy design. Postage stamp quilting consists of squaring, but small rows of objects. There is also the more difficult appliqué process that requires shapes on backgrounds that promise to create a stunning view. Paper piercing is developed when the quilter stitches fabric to a paper foundation. Used as guides, the quilter can block the entire quilt, constructing all sorts of objects and shapes.</p>

<h2 itemprop="hasPart about">The Growth and Beauty of Free Motion Quilting</h2>
<p>Free motion quilting has grown in popularity among quilters. This is an advanced stitch process where the sewing machine uses a darning foot as opposed to its feed dogs. This lets the fabric move freely with the quilter carefully feeding the fabric. This requires a steady hand as even an experienced quilter can easily disrupt the stitch process.</p>

<p>Free motion will produce an incredible design as it resembles embroidery done in a hand sewn fashion but with the convenience of modern technology. In the age of quilting sewing machines that can computer generate designs, old school quilters appreciate the greater control of the patterns free motion can put into their quilting.</p>

<p>Some quilting sewing machines make for a better range of free motion. There are also courses that can help the quilter develop the steady touch this process requires.</p>

<h2 itemprop="hasPart about">How to Select Quilting Sewing Machines</h2>
<p>From Singer to Brother, there are a broad selection of machines a quilter can choose from. A seasoned quilter will know how to wean through every feature, service and their accessories. Their experiences with quilting has taught them how to find the machine that fits. They look at the size, determining if it\'s too large or heavy for their considerations, especially if the quilting sewing machine has to go into the home. They look at everything in a machine, from built-in patterns, thread options and easy-to-use functionality. The professional quilter will consider customer needs and the production process to see if the quilting sewing machine can handle the workload.</p>

<p>Fortunately, there are products that fit any budget and requirements.</p>

<p>With a dedication to sew and learn, and with the right quilting sewing machine, the quilter can look forward to a productive and enjoyable future with their passion.</p> ',
                'meta_keywords'    => str_replace('sewing quilting machines', ', ', strtolower('Blog Post')),
                'meta_description' => strip_tags('To make a beautiful quilt lush with care, take a look at the range of quilting sewing machines. These products have the features to create exciting designs while simplifying the entire work process.'),
                'category_id'      => 1,
                'lang'             => 'en',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),



            array(
                'title'            => 'Which Quilting Machine is Right for You?',
                'slug'             => Str::slug('quilting-machine-for-you'),
                'content'          => '
<p>Quilters tend to be very passionate about their talent and rightfully so! However, finding the right sewing machine is essential for every level of quilting. Therefore, it’s important to look at the features of quilting sewing machines for sale that are best for you.</p>
<h2 itemprop="hasPart about">Quilting Sewing Machine Basics and More</h2>
<p>Before browsing a quilting machine sale, take some time to think about how you will use your machine. Is this a craft that you will be dabbling in, or is this an expert craftsmanship that you will be devoting much of your time to? Determine the type of quilting you will do; consider if you will you be making basic or heavy duty quilts, adding lace or using fancy embroidery stitching. Make a list of the extra features you prefer before looking at any quilting sewing machines for sale. </p>
<h2 itemprop="hasPart about">Recommended Quilting Sewing Machine Brand</h2>
<p>For more than 25 years, the Grace Company has had a reputation for producing the best quilting sewing machine for sale. They are the number one manufacturer of both machines and hand quilting frames. Throughout the years, the Grace Company has expanded to include quilting hoops and additional accessories. </p>
<h2 itemprop="hasPart about">Best Quilt Sewing Machine for Sale</h2>
<p>The top quilting machine for sale is the Unique Quilter by the Grace Company. They make the best machine quilting frames in the entire world and are rapidly becoming the frame manufacturer of choice for numerous long arm machine frame companies. The Grace Company makes quilting machine-frames and accessories for every level of quilter. </p>
<h2 itemprop="hasPart about">Quilt Frame Home Sewing Machine</h2>
<p>One of the best quilting sewing machines for sale for home use is the long arm quilt frame machine. They allow you to make quilts of all sizes. The long arm permits you to move the sewing head freely without moving the fabric, which allows for the precision detail. </p>
<h2 itemprop="hasPart about">Industrial Sewing Machines for Sale</h2>
<p>The Grace Company has the best industrial sewing machines for sale. Commercial quilting machines deliver the crucial combination of powerful performance, strong durability and high value for marketable sewing purposes. Home industrial grade sewing machines are available as well and are ideal for creating artistries made of sturdy materials such as pillows, cushions and seat covers.</p>

                ',
                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 2')),
                'meta_description' => strip_tags('There’s a variety of quilting sewing machines for sale with optional features that are perfect for every type of quilter.'),
                'category_id'      => 1,
                'lang'             => 'en',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Donec eu vehicula arcu',
                'slug'             => Str::slug('Blog Post 3'),
                'content'          => 'Aenean varius lectus commodo, sollicitudin nulla eget, malesuada velit. Maecenas neque mi, eleifend non urna non, pellentesque tincidunt orci. Aliquam elit libero, feugiat a posuere id, aliquet non dui. Nam ultrices nisl elit, a auctor mauris malesuada sit amet. Etiam malesuada scelerisque nisl, eu mollis leo condimentum sit amet. Nam varius aliquam malesuada. Curabitur scelerisque facilisis dolor, vitae viverra metus mollis ut. Nunc non neque ut ante pretium adipiscing sit amet sed leo. Donec eu vehicula arcu, non blandit quam. ',
                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 3')),
                'meta_description' => strip_tags('Blog Post 3'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Pellentesque molestie',
                'slug'             => Str::slug('Blog Post 4'),
                'content'          => 'Curabitur sit amet rutrum lectus. Donec in massa adipiscing, facilisis mi quis, faucibus quam. In adipiscing, nisl vitae varius sagittis, augue nulla pulvinar diam, at viverra est est vel dui. Ut at velit sem. Vivamus rutrum iaculis leo, et vehicula velit aliquam vitae. Pellentesque molestie, ipsum elementum eleifend viverra, felis neque sagittis lorem, sed vestibulum erat dolor iaculis erat. Curabitur porta, arcu vitae luctus sagittis, sapien sapien pretium lorem, id accumsan quam turpis ornare ligula. Curabitur porttitor et quam ut facilisis. In hac habitasse platea dictumst. Nulla sed rhoncus nulla, vitae iaculis eros. Vivamus non enim sit amet velit pharetra luctus. Curabitur sodales lectus vestibulum, hendrerit justo sit amet, ullamcorper diam. Donec eu velit vitae justo convallis convallis. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 4')),
                'meta_description' => strip_tags('Blog Post 4'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Aliquam elit libero',
                'slug'             => Str::slug('Blog Post 5'),
                'content'          => 'Aenean varius lectus commodo, sollicitudin nulla eget, malesuada velit. Maecenas neque mi, eleifend non urna non, pellentesque tincidunt orci. Aliquam elit libero, feugiat a posuere id, aliquet non dui. Nam ultrices nisl elit, a auctor mauris malesuada sit amet. Etiam malesuada scelerisque nisl, eu mollis leo condimentum sit amet. Nam varius aliquam malesuada. Curabitur scelerisque facilisis dolor, vitae viverra metus mollis ut. Nunc non neque ut ante pretium adipiscing sit amet sed leo. Donec eu vehicula arcu, non blandit quam. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 5')),
                'meta_description' => strip_tags('Blog Post 5'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Fusce dictum',
                'slug'             => Str::slug('Blog Post 6'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce risus massa, facilisis ac interdum quis, hendrerit ac lacus. Integer tempor lacinia justo eget accumsan. Fusce vitae lorem vulputate lectus gravida euismod. Donec vitae quam eu magna tristique ultrices id quis diam. Fusce dictum, nisi id vehicula condimentum, dui ipsum varius nisl, eget euismod tortor magna eget odio. Sed nec diam semper, fermentum lectus in, congue purus. Sed congue viverra dolor id cursus. Cras eu placerat eros, ac viverra leo. Proin eleifend leo tortor, quis molestie diam egestas at. Nullam suscipit adipiscing purus, nec sollicitudin metus interdum quis. Pellentesque dapibus vitae felis non lobortis. Suspendisse id mollis justo. Duis semper rutrum orci id tristique. Cras ultrices laoreet cursus. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 6')),
                'meta_description' => strip_tags('Blog Post 6'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Pellentesque molestie',
                'slug'             => Str::slug('Blog Post 7'),
                'content'          => 'Curabitur sit amet rutrum lectus. Donec in massa adipiscing, facilisis mi quis, faucibus quam. In adipiscing, nisl vitae varius sagittis, augue nulla pulvinar diam, at viverra est est vel dui. Ut at velit sem. Vivamus rutrum iaculis leo, et vehicula velit aliquam vitae. Pellentesque molestie, ipsum elementum eleifend viverra, felis neque sagittis lorem, sed vestibulum erat dolor iaculis erat. Curabitur porta, arcu vitae luctus sagittis, sapien sapien pretium lorem, id accumsan quam turpis ornare ligula. Curabitur porttitor et quam ut facilisis. In hac habitasse platea dictumst. Nulla sed rhoncus nulla, vitae iaculis eros. Vivamus non enim sit amet velit pharetra luctus. Curabitur sodales lectus vestibulum, hendrerit justo sit amet, ullamcorper diam. Donec eu velit vitae justo convallis convallis. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 7')),
                'meta_description' => strip_tags('Blog Post 7'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Nullam suscipit adipiscing purus',
                'slug'             => Str::slug('Blog Post 8'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce risus massa, facilisis ac interdum quis, hendrerit ac lacus. Integer tempor lacinia justo eget accumsan. Fusce vitae lorem vulputate lectus gravida euismod. Donec vitae quam eu magna tristique ultrices id quis diam. Fusce dictum, nisi id vehicula condimentum, dui ipsum varius nisl, eget euismod tortor magna eget odio. Sed nec diam semper, fermentum lectus in, congue purus. Sed congue viverra dolor id cursus. Cras eu placerat eros, ac viverra leo. Proin eleifend leo tortor, quis molestie diam egestas at. Nullam suscipit adipiscing purus, nec sollicitudin metus interdum quis. Pellentesque dapibus vitae felis non lobortis. Suspendisse id mollis justo. Duis semper rutrum orci id tristique. Cras ultrices laoreet cursus. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 8')),
                'meta_description' => strip_tags('Blog Post 8'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Mauris risus nisl',
                'slug'             => Str::slug('Blog Post 9'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in odio in augue tincidunt viverra. Cras sit amet risus eget augue fermentum consequat et id libero. Donec a laoreet orci. In mi ligula, ornare sit amet nisi et, laoreet tincidunt elit. Curabitur id dui urna. Cras metus tortor, egestas nec magna ornare, scelerisque laoreet ante. Nam aliquam felis velit, a ornare ante porta quis. Proin nisi enim, lobortis at sapien sit amet, lacinia dictum libero. Donec ac pulvinar ante. Mauris risus nisl, pellentesque sed nunc eget, aliquam volutpat dolor. Fusce mollis id purus quis malesuada. Nullam gravida faucibus faucibus. Curabitur ut neque odio. Aenean porta fringilla placerat. Nullam consequat sagittis orci sed tincidunt. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 9')),
                'meta_description' => strip_tags('Blog Post 9'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Nam iaculis leo risus',
                'slug'             => Str::slug('Blog Post 10'),
                'content'          => 'In varius volutpat accumsan. Nam rhoncus massa ipsum. In ante erat, vestibulum non neque sit amet, sagittis ultricies risus. Nam iaculis leo risus, at malesuada arcu dictum quis. Nulla blandit mi turpis, nec vestibulum diam suscipit egestas. Aliquam ut mollis nulla. Sed scelerisque, magna vel scelerisque porta, mauris sem varius massa, eget sagittis dui eros id metus. Curabitur imperdiet est tellus, sed rutrum lacus viverra ut. Donec gravida adipiscing tellus sit amet posuere. Duis vel auctor arcu, nec ornare purus. Nulla vehicula, eros quis imperdiet laoreet, libero ipsum porttitor dui, consequat fringilla nulla lectus non elit. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 10')),
                'meta_description' => strip_tags('Blog Post 10'),
                'category_id'      => 1,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ), array(
                'title'            => 'Vestibulum quis dui in tellus commodo eleifend',
                'slug'             => Str::slug('Blog Post 11'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 11')),
                'meta_description' => strip_tags('Blog Post 11'),
                'category_id'      => 2,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => ' Sed scelerisque',
                'slug'             => Str::slug('Blog Post 12'),
                'content'          => 'In varius volutpat accumsan. Nam rhoncus massa ipsum. In ante erat, vestibulum non neque sit amet, sagittis ultricies risus. Nam iaculis leo risus, at malesuada arcu dictum quis. Nulla blandit mi turpis, nec vestibulum diam suscipit egestas. Aliquam ut mollis nulla. Sed scelerisque, magna vel scelerisque porta, mauris sem varius massa, eget sagittis dui eros id metus. Curabitur imperdiet est tellus, sed rutrum lacus viverra ut. Donec gravida adipiscing tellus sit amet posuere. Duis vel auctor arcu, nec ornare purus. Nulla vehicula, eros quis imperdiet laoreet, libero ipsum porttitor dui, consequat fringilla nulla lectus non elit. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 12')),
                'meta_description' => strip_tags('Blog Post 12'),
                'category_id'      => 2,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Aenean sapien lectus',
                'slug'             => Str::slug('Blog Post 13'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 13')),
                'meta_description' => strip_tags('Blog Post 13'),
                'category_id'      => 3,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Phasellus eget euismod tortor',
                'slug'             => Str::slug('Blog Post 14'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 14')),
                'meta_description' => strip_tags('Blog Post 14'),
                'category_id'      => 3,
                'lang'             => 'tr',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            ),
            array(
                'title'            => 'Vestibulum at congue enim',
                'slug'             => Str::slug('Blog Post 14'),
                'content'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar eu orci id pretium. Morbi blandit lorem non orci commodo ullamcorper. Morbi rhoncus nisl non ligula posuere malesuada. In sit amet eros feugiat, condimentum urna vel, ornare tortor. Donec quis tellus eleifend, vulputate augue sed, molestie ipsum. Aenean sapien lectus, laoreet vitae justo at, posuere faucibus justo. Nam auctor, magna at pretium luctus, nisi mi gravida arcu, suscipit ultrices velit nisi vel libero. Phasellus eget euismod tortor. Aliquam rhoncus felis sed magna scelerisque fringilla. Vestibulum at congue enim. Integer rutrum aliquam velit in dictum. Sed sed sollicitudin nisi, et scelerisque odio. Vestibulum quis dui in tellus commodo eleifend. Suspendisse et quam purus. Donec at massa feugiat leo commodo commodo. ',

                'meta_keywords'    => str_replace(' ', ', ', strtolower('Blog Post 14')),
                'meta_description' => strip_tags('Blog Post 14'),
                'category_id'      => 5,
                'lang'             => 'en',
                'created_at'       => new DateTime,
                'updated_at'       => new DateTime,
            )
        ));
    }
}
