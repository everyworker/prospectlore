<?php
include 'lorelib.php';
$faithPRS = "7"
$numinaPRS = "1 2 3 4 5 6 144 145 146 147 148 149 150 151 152 188 189 190 191 192"
$changelingPRS = "201 202 203 204 205 206 207 208 209 210 211 212 213 214 215 216 217 218 219 220 221 222 223 224 225 226 227 228 229 230 231 232 233 234 235 236 237 238 239 240 241 242 243 244 245 246 247 248 249 250 251 252 253 254 255 256 257 258 259 260 261 262 263 264 265 266 267 268 269 270 271 272 273 274 275 276 277 278 279 280 281 282"

function DoOptions($runlore,$listlore,$typelore) {
$prunlore = explode(" ",$runlore);
foreach( $prunlore as $value) {
echo "<B>" . $listlore["$value"] . ":</B>&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;";
if (strcmp("Knowledge",substr(trim($typelore[$value]),0,9)) == 0) {
echo "<input type='radio' name='" . $value . "' value='None' checked> None";
echo "<input type='radio' name='" . $value . "' value='Suspected'> Suspected";
echo "<input type='radio' name='" . $value . "' value='Minimal'> Minimal";
echo "<input type='radio' name='" . $value . "' value='Little'> Little";
echo "<input type='radio' name='" . $value . "' value='Decent'> Decent";
echo "<input type='radio' name='" . $value . "' value='Extensive'> Extensive";
} else {
echo "<input type='radio' name='" . $value . "' value='None' checked> None";
echo "<input type='radio' name='" . $value . "' value='Suspected'> Suspected";
echo "<input type='radio' name='" . $value . "' value='Yes'> Yes";
}
echo "&nbsp;]<br><br>";
}
}
?>