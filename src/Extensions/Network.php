<?php
/**
 * Assumptions
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @copyright 2015 MehrAlsNix (http://www.mehralsnix.de)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://github.com/MehrAlsNix/Assumptions
 */

namespace MehrAlsNix\Assumptions\Extensions;

/**
 * Trait Network
 * @package MehrAlsNix\Assumptions\Extensions
 */
trait Network
{
    private static $SOCK_ERR_MSG = 'Unable to create socket: ';

    /**
     * @param string $address
     * @param int    $port
     */
    public static function assumeSocket($address, $port = 0)
    {
        $socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        assumeThat($socket, is(not(false)), self::$SOCK_ERR_MSG . socket_last_error($socket));
        assumeThat(@socket_connect($socket, $address, $port), is(not(false)), 'Unable to connect: ' . $address . ':' . $port);
    }
}
