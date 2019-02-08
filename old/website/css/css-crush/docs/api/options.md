<!--{

"title": "Options"

}-->

<table>
<tr>
    <th class="option">Option
    <th class="values">Values (default in bold)
    <th>Description
</tr>
<tr>
    <td class="option">minify
    <td class="values"><b>true</b> | false | Array
    <td>Enable or disable minification. Optionally specify an array of advanced minification parameters. Currently the only advanced option is 'colors', which will compress all color values in any notation.
</tr>
<tr>
    <td class="option">formatter
    <td class="values"><b>block</b> | single-line | padded
    <td>Set the formatting mode. Overrides minify option if both are set.
</tr>
<tr>
    <td class="option">newlines
    <td class="values"><b>use-platform</b> | windows/win | unix
    <td>Set the output style of newlines
</tr>
<tr>
    <td class="option">boilerplate
    <td class="values"><b>true</b> | false | Path
    <td>Prepend a boilerplate to the output file
</tr>
<tr>
    <td class="option">versioning
    <td class="values"><b>true</b> | false
    <td>Append a timestamped querystring to the output filename
</tr>
<tr>
    <td class="option">vars
    <td class="values">Array
    <td>An associative array of CSS variables to be applied at runtime. These will override variables declared globally or in the CSS.
</tr>
<tr>
    <td class="option">cache
    <td class="values"><b>true</b> | false
    <td>Turn caching on or off.
</tr>
<tr>
    <td class="option">output_dir
    <td class="values">Path
    <td>Specify an output directory for compiled files. Defaults to the same directory as the host file.
</tr>
<tr>
    <td class="option">output_file
    <td class="values">Output filename
    <td>Specify an output filename (suffix is added).
</tr>
<tr>
    <td class="option">asset_dir
    <td class="values">Path
    <td>Directory for SVG and image files generated by plugins (defaults to the main file output directory).
</tr>
<tr>
    <td class="option">stat_dump
    <td class="values"><b>false</b> | true | Path
    <td>Save compile stats and variables to a file in json format.
</tr>
<tr>
    <td class="option">vendor_target
    <td class="values"><b>"all"</b> | "moz", "webkit", ... | Array
<td>Limit aliasing to a specific vendor, or an array of vendors.
</tr>
<tr>
    <td class="option">rewrite_import_urls
    <td class="values"><b>true</b> | false | "absolute"
    <td>Rewrite relative URLs inside inlined imported files.
</tr>
<tr>
    <td class="option">plugins
    <td class="values">Array
    <td>An array of plugin names to enable.
</tr>
<tr>
    <td class="option">source_map
    <td class="values">true | <b>false</b>
    <td>Output a source map (compliant with the Source Map v3 proposal).
</tr>
<tr>
    <td class="option">context
    <td class="values">Path
    <td>Context for importing resources from relative urls (Only applies to `csscrush_string()` and command line utility).
</tr>
<tr>
    <td class="option">doc_root
    <td class="values">Path
    <td>Specify an alternative server document root for situations where the CSS is being served behind an alias or url rewritten path.
</tr>
<tr>
    <td class="option">settings
    <td class="values">Array
    <td>An associative array of plugin and environment settings. Used primarily for plugin configuration.
</tr>
</table>
