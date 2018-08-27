<?PHP 
/**
 * Initialize the SkillzCMS framework
 * 
 * PHP version >=7.0.0
 *
 * LICENSE: MIT
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE
 *
 * @category   Core
 * @package    skillzcms/core
 * @author     Jakob Kronsteiner <hellostranger@skillzcms.org>
 * @license    https://opensource.org/licenses/MIT  MIT license
 * @version    SVN: 1.0.0
 * @link       https://skillzcms.org/documentation
 * @since      File available since release 1.0.0
 */


namespace Skillzcms\Framework;

class Initialize {
    
    public function __construct() {
       
    }
    
    public static function startInit() {
        echo "Skillz CMS is now initialized! Yay.";     
        return; 
    }
    
}
