<?php return '<?xml version="1.0"?>
<plugins xmlns="http://pkp.sfu.ca" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://pkp.sfu.ca plugins.xsd">
	<plugin category="generic" product="epubJsViewer">
		<name locale="en">EPUB Viewer</name>
		<name locale="en_US">EPUB Viewer</name>
		<homepage>https://github.com/EKT/epubJsViewer-ojs</homepage>
		<summary locale="en"><![CDATA[This plugin uses the (<a href="https://github.com/futurepress/epub.js" target="_blank">epub.js library</a>) to embed EPUB files on the articles and issues galley view pages.]]></summary>
		<summary locale="en_US"><![CDATA[This plugin uses the (<a href="https://github.com/futurepress/epub.js" target="_blank">epub.js library</a>) to embed EPUB files on the articles and issues galley view pages.]]></summary>
		<description locale="en"><![CDATA[<p>EpubJsViewer plugin integrates epub.js in OJS articles and issues permitting the user the view EPUB files.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>EpubJsViewer plugin integrates epub.js in OJS articles and issues permitting the user the view EPUB files.</p>]]></description>
		<maintainer>
			<name>Dimitris Sioulas</name>
			<institution>National Documentation Center</institution>
			<email>dsioulas@ekt.gr</email>
		</maintainer>
		<release date="2020-10-13"  version="1.0.0.0" md5="aa8528a982424015c650a69be61f61f5">
			<package>https://github.com/EKT/epubJsViewer-ojs/releases/download/v1_0_0-0/epubJsViewer-ojs-v1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update to be compatible with OJS 3.2.1.x</description>
		</release>
	</plugin>
	<plugin category="generic" product="hypothesis">
		<name locale="en">Hypothes.is</name>
		<name locale="en_US">Hypothes.is</name>
		<homepage>https://github.com/asmecher/hypothesis</homepage>
		<summary locale="en">This plugin integrates the Hypothes.is annotation tool into articles.</summary>
		<summary locale="en_US">This plugin integrates the Hypothes.is annotation tool into articles.</summary>
		<description locale="en"><![CDATA[This plugin integrates Hypothes.is (<a href="http://hypothes.is" target="_blank">http://hypothes.is</a>) in OJS articles, permitting annotation and commenting.]]></description>
		<description locale="en_US"><![CDATA[This plugin integrates Hypothes.is (<a href="http://hypothes.is" target="_blank">http://hypothes.is</a>) in OJS articles, permitting annotation and commenting.]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2017-02-20" version="1.0.0.0" md5="09c6cff1b9bd544e41cd22a3ebe41088">
			<package>https://github.com/asmecher/hypothesis/releases/download/ojs-3_0_2-0/hypothesis-ojs-3_0_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS 3.0.2.</description>
		</release>
		<release date="2017-10-23" version="1.0.0.0" md5="c812e14336807a5704af34c39b9b5518">
			<package>https://github.com/asmecher/hypothesis/releases/download/ojs-3_1_0-0/hypothesis-ojs-3_1_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS 3.1.0.</description>
		</release>
		<release date="2018-04-04" version="1.0.1.0" md5="31171a9a889104e41fac5136ec41050b">
			<package>https://github.com/asmecher/hypothesis/releases/download/ojs-3_1_1-0/hypothesis-ojs-3_1_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS 3.1.1/3.1.2.</description>
		</release>
		<release date="2020-02-27" version="1.0.2.0" md5="5bf045d0490284044125d398e2cea41b">
			<package>https://github.com/asmecher/hypothesis/releases/download/v1.0.2-0/hypothesis-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS/OPS 3.2.</description>
		</release>
		<release date="2020-06-09" version="1.0.3.1" md5="22d0f8cd87a6d0dc7c0e989178b11d0e">
			<package>https://github.com/asmecher/hypothesis/releases/download/v1.0.3-1/hypothesis-v1.0.3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS/OPS 3.2.</description>
		</release>
		<release date="2020-06-19" version="1.0.3.2" md5="1ade03ccaa1afca522928a93641e8bef">
			<package>https://github.com/asmecher/hypothesis/releases/download/v1.0.3-2/hypothesis-v1.0.3-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS/OPS 3.2.</description>
		</release>
		<release date="2021-01-28" version="1.0.4.0" md5="a0c6196b1d462b04a6d63fd10f4a8b80">
			<package>https://github.com/asmecher/hypothesis/releases/download/v1_0_4-0/hypothesis-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS/OPS 3.3.</description>
		</release>
		<release date="2023-03-23" version="1.0.5.0" md5="346a4613e0383ace4426ea9dacf3c586">
			<package>https://github.com/asmecher/hypothesis/releases/download/v1_0_5-0/hypothesis-v1_0_5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Hypothes.is plugin for OJS/OPS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="shibboleth">
		<name locale="en">Shibboleth</name>
		<name locale="en_US">Shibboleth</name>
		<homepage>https://github.com/pkp/shibboleth</homepage>
		<summary locale="en">This plugin adds Shibboleth support.</summary>
		<summary locale="en_US">This plugin adds Shibboleth support.</summary>
		<description locale="en">This plugin allows third-party authentication via a Shibboleth service.</description>
		<description locale="en_US">This plugin allows third-party authentication via a Shibboleth service.</description>
		<maintainer>
			<name>Chris Maden</name>
			<institution>University of Illinois</institution>
			<email>crism@illinois.edu</email>
		</maintainer>
		<release date="2017-11-06" version="1.0.0.0" md5="19eacf80af7762b9d4af071cb6e20ec7">
			<package>https://github.com/pkp/shibboleth/releases/download/ojs-3_1_0-0-1/shibboleth-ojs-3_1_0-0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Shibboleth plugin for OJS 3.1.0/3.1.1.</description>
		</release>
		<release date="2019-02-28" version="1.0.0.0" md5="fb653b21371b2dbfa3e30987afa3c9bf">
			<package>https://github.com/pkp/shibboleth/releases/download/3_1_2-0/shibboleth-3_1_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Shibboleth plugin for OJS 3.1.2.</description>
		</release>
		<release date="2021-04-26" version="1.1.0.0" md5="1d1d154a55a59c126c1a5ef001bd537d">
			<package>https://github.com/pkp/shibboleth/releases/download/v1.1.0-0/shibboleth-v1_1_0_0.tgz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Shibboleth plugin for 3.2 and later.</description>
		</release>
		<release date="2021-07-19" version="1.2.0.0" md5="a1ca79d9218d7050066bad4d615a1844">
			<package>https://github.com/pkp/shibboleth/releases/download/v1.2.0-0/shibboleth-v1_2_0_0.tgz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Shibboleth plugin for 3.2 and later.</description>
		</release>
	</plugin>
	<plugin category="generic" product="translator">
		<name locale="en">Translator</name>
		<name locale="en_US">Translator</name>
		<homepage>https://github.com/pkp/translator</homepage>
		<summary locale="en">This plugin permits translations to be updated and edited.</summary>
		<summary locale="en_US">This plugin permits translations to be updated and edited.</summary>
		<description locale="en"><![CDATA[This plugin allows site administrators to edit the translation files that ship with the software. See <a href="https://pkp.sfu.ca/wiki/index.php/Translating_OxS" target="_blank">https://pkp.sfu.ca/wiki/index.php/Translating_OxS</a> for information on translation management and contributing back.]]></description>
		<description locale="en_US"><![CDATA[This plugin allows site administrators to edit the translation files that ship with the software. See <a href="https://pkp.sfu.ca/wiki/index.php/Translating_OxS" target="_blank">https://pkp.sfu.ca/wiki/index.php/Translating_OxS</a> for information on translation management and contributing back.]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-09-11" version="2.0.2.0" md5="83c417e1e6ebfe36e46808a59a23f1bc">
			<package>https://github.com/pkp/translator/releases/download/v2.0.2-0/translator-v2.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Translator plugin for OJS/OMP 3.1.x.</description>
		</release>
		<release date="2018-09-25" version="2.0.3.0" md5="53255f015f44a58d9cf096bb6677764d">
			<package>https://github.com/pkp/translator/releases/download/v2.0.3-0/translator-v2.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Translator plugin for OJS/OMP 3.1.1.x.</description>
		</release>
		<release date="2019-03-04" version="2.0.3.1" md5="5cb6d2e26f113bfb3e632f3995b19568">
			<package>https://github.com/pkp/translator/releases/download/v2.0.3-1/translator-v2.0.3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the Translator plugin for OJS/OMP 3.1.2.</description>
		</release>
	</plugin>
	<plugin category="generic" product="backup">
		<name locale="en">Backup</name>
		<name locale="en_US">Backup</name>
		<homepage>https://github.com/asmecher/backup</homepage>
		<summary locale="en">This plugin permits backups to be downloaded from within OJS.</summary>
		<summary locale="en_US">This plugin permits backups to be downloaded from within OJS.</summary>
		<description locale="en">This plugin allows site administrators to download backups of the system.</description>
		<description locale="en_US">This plugin allows site administrators to download backups of the system.</description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-07-03" version="2.0.0.0" md5="77dca726d9c71e7b00665b90c6307c5f">
			<package>https://github.com/asmecher/backup/releases/download/v2_0_0-0/backup-v2_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the backup plugin.</description>
		</release>
		<release date="2019-03-04" version="2.0.1.0" md5="54e5f2551affd8501c4407296fc5652b">
			<package>https://github.com/asmecher/backup/releases/download/v2.0.1-0/backup-v2.0.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the backup plugin for OJS/OMP 3.1.2.</description>
		</release>
		<release date="2020-02-27" version="2.0.2.0" md5="f8ab52547291086c449df8ce572cb0cc">
			<package>https://github.com/asmecher/backup/releases/download/v2.0.2-0/backup-v2.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the backup plugin for OJS/OMP/OPS 3.2.</description>
		</release>
		<release date="2020-04-08" version="2.0.2.1" md5="1989c382059e9ba9225b8760027faee3">
			<package>https://github.com/asmecher/backup/releases/download/v2.0.2-1/backup-v2.0.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Adds new translations to the 2.0.2 release.</description>
		</release>
		<release date="2020-04-08" version="2.0.2.2" md5="b36e0329aee775d4c8e111e519895330">
			<package>https://github.com/asmecher/backup/releases/download/v2.0.2-2/backup-v2.0.2-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Adds new translations to the 2.0.2-1 release.</description>
		</release>
		<release date="2021-01-28" version="2.0.3.0" md5="eadebb2d59723de91cf174e692a71819">
			<package>https://github.com/asmecher/backup/releases/download/v2_0_3-0/backup-v2_0_3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Adds new translations to the previous release.</description>
		</release>
		<release date="2023-03-23" version="2.0.4.0" md5="3cb1e5598c1cdd8360031c1181ab8ec5">
			<package>https://github.com/asmecher/backup/releases/download/v2_0_4-0/backup-v2_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS/OMP/OPS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="plagiarism">
		<name locale="en">iThenticate</name>
		<name locale="en_US">iThenticate</name>
		<homepage>https://github.com/pkp/plagiarism</homepage>
		<summary locale="en">This plugin permits automatic submission of uploaded content to the iThenticate service for plagiarism checking.</summary>
		<summary locale="en_US">This plugin permits automatic submission of uploaded content to the iThenticate service for plagiarism checking.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits automatic submission of uploaded content to the <a href="http://www.ithenticate.com/" target="_new">iThenticate service</a> for plagiarism checking.</p><p>See the README document included in this plugin for installation instructions.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits automatic submission of uploaded content to the <a href="http://www.ithenticate.com/" target="_new">iThenticate service</a> for plagiarism checking.</p><p>See the README document included in this plugin for installation instructions.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-06-21" version="1.0.1.0" md5="bea113ea0d9fe4096e7f3ecf25d691b3">
			<package>https://github.com/asmecher/plagiarism/releases/download/v1.0.1/plagiarism-v1.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the iThenticate plugin for OJS/OMP 3.1.x.</description>
		</release>
		<release date="2019-03-04" version="1.0.2.0" md5="0549917599628769f912c8f190997781">
			<package>https://github.com/asmecher/plagiarism/releases/download/v1.0.2/plagiarism-v1.0.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the iThenticate plugin for OJS/OMP 3.1.2.</description>
		</release>
		<release date="2019-03-04" version="1.0.3.0" md5="8594ef65da0d3220e5ad107348c4feda">
			<package>https://github.com/asmecher/plagiarism/releases/download/v1.0.3-0/plagiarism-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the iThenticate plugin for OJS/OMP 3.2.0.</description>
		</release>
		<release date="2021-01-28" version="1.0.4.0" md5="468861fa91fa9987965c3174d3bc413a">
			<package>https://github.com/asmecher/plagiarism/releases/download/v1_0_4-0/plagiarism-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the iThenticate plugin for OJS/OMP 3.3.0.</description>
		</release>
		<release date="2022-01-26" version="1.0.5.0" md5="06c4d79ed982f6212b65f1cb69981df5">
			<package>https://github.com/pkp/plagiarism/releases/download/v1_0_5-0/plagiarism-v1_0_5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Adds new translations and bug fixes.</description>
		</release>
		<release date="2022-02-17" version="1.0.5.1" md5="6a9a64da645a0e70ac355e83de25425e">
			<package>https://github.com/pkp/plagiarism/releases/download/v1_0_5-1/plagiarism-v1_0_5-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Fix missing dependency in release version.</description>
		</release>
		<release date="2023-07-02" version="1.0.6.0" md5="e19c2bb64b9efb90ca4b499027644379">
			<package>https://github.com/pkp/plagiarism/releases/download/v1_0_6-0/plagiarism-v1_0_6-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Various bugfixes around error handling.</description>
		</release>
	</plugin>
	<plugin category="generic" product="coins">
		<name locale="en">COinS</name>
		<name locale="en_US">COinS</name>
		<homepage>https://github.com/pkp/coins</homepage>
		<summary locale="en">This plugin embeds OpenURL COinS in OJS articles.</summary>
		<summary locale="en_US">This plugin embeds OpenURL COinS in OJS articles.</summary>
		<description locale="en"><![CDATA[This plugin embeds OpenURL COinS (<a href="http://ocoins.info/" target="_blank">http://ocoins.info/</a>) in OJS articles, permitting tools like Zotero (<a href="http://www.zotero.org" target="_blank">http://www.zotero.org</a>) to grab citations.]]></description>
		<description locale="en_US"><![CDATA[This plugin embeds OpenURL COinS (<a href="http://ocoins.info/" target="_blank">http://ocoins.info/</a>) in OJS articles, permitting tools like Zotero (<a href="http://www.zotero.org" target="_blank">http://www.zotero.org</a>) to grab citations.]]></description>
		<maintainer>
			<name>Dimitris Efstathiou</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-03-14" version="1.0.1.0" md5="95d7140b05ac97c89dc14e2e76dff967">
			<package>https://github.com/pkp/coins/releases/download/coins-1_0_1-0/coins-1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release 1.0.1 of the COinS plugin for OJS between 3.0.2-0 and 3.1.1-x.</description>
		</release>
		<release date="2019-03-04" version="1.0.2.1" md5="1093dc59a8cfe975f86db524e8840083">
			<package>https://github.com/pkp/coins/releases/download/v1.0.2-1/coins-v1.0.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release 1.0.2-1 of the COinS plugin for OJS 3.1.2.</description>
		</release>
		<release date="2020-02-27" version="1.0.3.0" md5="fe9cfb9c30ea14060f1b1c3aea8181f5">
			<package>https://github.com/pkp/coins/releases/download/v1.0.3-0/coins-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release 1.0.3-0 of the COinS plugin for OJS 3.2.</description>
		</release>
		<release date="2020-06-19" version="1.0.3.2" md5="a2c7751f4aff5360c54172f081cc254e">
			<package>https://github.com/pkp/coins/releases/download/v1.0.3-2/coins-v1.0.3-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release 1.0.3-2 of the COinS plugin for OJS 3.2.1/3.3.0.</description>
		</release>
		<release date="2023-08-29" version="1.0.3.3" md5="5f727e43433beef8da3bdaa89486d033">
			<package>https://github.com/pkp/coins/releases/download/v1_0_3-3/coins-v1_0_3-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release 1.0.3-3 of the COinS plugin for OJS 3.2.1/3.3.0.</description>
		</release>
		<release date="2023-04-11" version="1.0.4.0" md5="95918a3bfba43969b1bb9589948d123b">
			<package>https://github.com/pkp/coins/releases/download/v1_0_4-0/coins-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.4.0</description>
		</release>
		<release date="2023-08-29" version="1.0.4.1" md5="c64f81b41b62c95e2ab007b1fac0e105">
			<package>https://github.com/pkp/coins/releases/download/v1_0_4-1/coins-v1_0_4-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release for OJS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="importexport" product="quickSubmit">
		<name locale="en">QuickSubmit</name>
		<name locale="en_US">QuickSubmit</name>
		<homepage>https://github.com/pkp/quickSubmit</homepage>
		<summary locale="en">The QuickSubmit plugin permits Journal Managers to quickly enter submissions through the OJS website, bypassing the editorial workflow.</summary>
		<summary locale="en_US">The QuickSubmit plugin permits Journal Managers to quickly enter submissions through the OJS website, bypassing the editorial workflow.</summary>
		<description locale="en"><![CDATA[<p>The QuickSubmit plugin permits Journal Managers to quickly enter submissions through the OJS website, bypassing the editorial workflow.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The QuickSubmit plugin permits Journal Managers to quickly enter submissions through the OJS website, bypassing the editorial workflow.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2017-02-01" version="1.0.1.0" md5="3047c425524b86fe035d0ff19e380926">
			<package>https://github.com/pkp/quickSubmit/releases/download/ojs-3_0_2-0/quickSubmit-ojs-3_0_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the QuickSubmit plugin for OJS 3.0.2.</description>
		</release>
		<release date="2017-10-21" version="1.0.1.0" md5="6a083c20c06d8bc1867e02f83561836b">
			<package>https://github.com/pkp/quickSubmit/releases/download/ojs-3_1_0-0/quickSubmit-ojs-3_1_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the QuickSubmit plugin for OJS 3.1.0.</description>
		</release>
		<release date="2018-04-04" version="1.0.2.0" md5="d5346903712fe0f73e62ccdc256db9eb">
			<package>https://github.com/pkp/quickSubmit/releases/download/ojs-3_1_1-0/quickSubmit-ojs-3_1_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the QuickSubmit plugin for OJS 3.1.1.</description>
		</release>
		<release date="2018-04-04" version="1.0.3.0" md5="05dfaaa334d65a498dda2a076ba4242b">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.3-0/quickSubmit-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>v1.0.3-0 release of the QuickSubmit plugin for OJS 3.1.1.</description>
		</release>
		<release date="2019-03-04" version="1.0.4.0" md5="775cfc6648e1b646a678895f19f71fa5">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.4-0/quickSubmit-v1.0.4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>v1.0.4-0 release of the QuickSubmit plugin for OJS 3.1.2.</description>
		</release>
		<release date="2019-04-03" version="1.0.4.1" md5="80eb29c3ea700aa6498674f8dac6b229">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.4-1/quickSubmit-v1.0.4-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the QuickSubmit plugin for OJS 3.1.2.</description>
		</release>
		<release date="2020-02-27" version="1.0.5.0" md5="d36826c87d8de74c380c9536a922b83a">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.5-0/quickSubmit-v1.0.5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the QuickSubmit plugin for OJS 3.2.</description>
		</release>
		<release date="2020-03-19" version="1.0.5.1" md5="c73a7198df995805463573ce1c9fef30">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.5-1/quickSubmit-v1.0.5-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the QuickSubmit plugin for OJS 3.2.</description>
		</release>
		<release date="2020-04-09" version="1.0.5.2" md5="f28b95494565ce4b202a169b03263f01">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.5-2/quickSubmit-v1.0.5-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the QuickSubmit plugin for OJS 3.2.</description>
		</release>
		<release date="2020-06-19" version="1.0.5.3" md5="4fcb9661dc7fd87c2a5ee3631b957902">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1.0.5-3/quickSubmit-v1.0.5-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the QuickSubmit plugin for OJS 3.2.1.</description>
		</release>
		<release date="2020-08-28" version="1.0.5.4" md5="42418c26488c57b84e24260154fecf03">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1_0_5-4/quickSubmit-v1_0_5-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the QuickSubmit plugin for OJS 3.2.1.</description>
		</release>
		<release date="2020-09-02" version="1.0.5.6" md5="edcc8409dc3e9810d96ea2690e630f4c">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1_0_5-6/quickSubmit-v1_0_5-6.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the QuickSubmit plugin for OJS 3.2.1.</description>
		</release>
		<release date="2021-01-28" version="1.0.6.0" md5="7d36d2260c58cad45a08e8fa11f3d628">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1_0_6-0/quickSubmit-v1_0_6-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the QuickSubmit plugin for OJS 3.3.0.</description>
		</release>
		<release date="2023-02-03" version="1.0.6.1" md5="a9e915667e976cddc87ae2f9e866121c">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1_0_6-1/quickSubmit-v1_0_6-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the QuickSubmit plugin for OJS 3.3.0.</description>
		</release>
		<release date="2023-03-23" version="1.0.7.1" md5="bb0dfcfab218720ecc1f1cc506c9b26a">
			<package>https://github.com/pkp/quickSubmit/releases/download/v1_0_7-1/quickSubmit-v1_0_7-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the QuickSubmit plugin for OJS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="allowedUploads">
		<name locale="en">Allowed Uploads</name>
		<name locale="en_US">Allowed Uploads</name>
		<name locale="fi_FI">Sallitut tiedostomuodot</name>
		<homepage>https://github.com/ajnyga/allowedUploads</homepage>
		<summary locale="en">Allowed Uploads plugin enables to choose the filetypes that are allowed when submitting a manuscript.</summary>
		<summary locale="en_US">Allowed Uploads plugin enables to choose the filetypes that are allowed when submitting a manuscript.</summary>
		<summary locale="fi_FI">Tämän lisäosan avulla voit rajoittaa niitä tiedostomuotoja, joita voi lähettää käsikirjoituksen yhteyteen.</summary>
		<description locale="en"><![CDATA[<p>Allowed Uploads plugin enables to choose the filetypes that are allowed when submitting a manuscript.</p><p><strong>NOTE!</strong> This is not a security plugin! Please make sure that the files directory is outside the web root.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>Allowed Uploads plugin enables to choose the filetypes that are allowed when submitting a manuscript.</p><p><strong>NOTE!</strong> This is not a security plugin! Please make sure that the files directory is outside the web root.</p>]]></description>
		<description locale="fi_FI"><![CDATA[<p>Tämän lisäosan avulla voit rajoittaa niitä tiedostomuotoja, joita voi lähettää käsikirjoituksen yhteyteen.</p><p><strong>HUOM!</strong> Tätä lisäosaa ei ole tarkoitettu parantamaan järjestelmän tietoturvaa! Huolehdi, että järjestelmän tiedostot-hakemisto on sijoitettu tai suojattu oikein.</p>]]></description>
		<maintainer>
			<name>Antti-Jussi Nygård</name>
			<institution/>
			<email>ajnyga@gmail.com</email>
		</maintainer>
		<release date="2018-03-15" version="1.0.0.1" md5="2379aae7ef7685186b19c015d7c84ecc">
			<package>https://github.com/ajnyga/allowedUploads/releases/download/v.1.0/allowedUploads.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Initial release of the Allowed Uploads plugin.</description>
		</release>
		<release date="2018-07-27" version="1.0.0.2" md5="f5e922bb0b76929bad544f9801efab68">
			<package>https://github.com/ajnyga/allowedUploads/releases/download/v.1.0.0.2/allowedUploads.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Updated release of the Allowed Uploads plugin.</description>
		</release>
		<release date="2020-02-25" version="1.0.0.5" md5="f518e21a670df0ae612b3d15a1c49f59">
			<package>https://github.com/ajnyga/allowedUploads/releases/download/1.0.0.5/allowedUploads.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update for compatibility with v3.2.</description>
		</release>
		<release date="2022-07-27" version="1.1.1.0" md5="6f86cacd51deb15a4ba0353ba04c9a74">
			<package>https://github.com/ajnyga/allowedUploads/releases/download/1.1.1.0/allowedUploads.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update for compatibility with v3.3.0</description>
		</release>
	</plugin>
	<plugin category="generic" product="authorsHistory">
		<name locale="en">Authors History</name>
		<name locale="en_US">Authors History</name>
		<name locale="es_ES">Historia de los autores</name>
		<name locale="pt_BR">Histórico dos autores</name>
		<homepage>https://github.com/lepidus/authorsHistory</homepage>
		<summary locale="en">This plugin adds a tab in the submission view, where all submissions from each contributor are listed.</summary>
		<summary locale="en_US">This plugin adds a tab in the submission view, where all submissions from each contributor are listed.</summary>
		<summary locale="es_ES">Este módulo agrega una pestaña en la vista de envío, donde se enumeran todos los envíos de cada colaborador.</summary>
		<summary locale="pt_BR">Este plugin adiciona uma aba na visualização da submissão, onde todos as submissões de cada contribuidor são listadas.</summary>
		<description locale="en"><![CDATA[<p>This plugin adds a tab in the submission view, where all submissions from each contributor are listed.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin adds a tab in the submission view, where all submissions from each contributor are listed.</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Este módulo agrega una pestaña en la vista de envío, donde se enumeran todos los envíos de cada colaborador.</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Este plugin adiciona uma guia na visualização da submissão, onde todos as submissões de cada contribuidor são listadas</p>]]></description>
		<maintainer>
			<name>SciELO Brazil Online Submission and Preprints Unit</name>
			<institution>SciELO in collaboration with Lepidus</institution>
			<email>scielo.submission@scielo.org</email>
		</maintainer>
		<release date="2021-05-03" version="1.0.7.0" md5="886332d530db5937d77f13679d68834a">
			<package>https://github.com/lepidus/authorsHistory/releases/download/v1.0.7/authorsHistory.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to add a tab in the submission view where all submission from each contributor are listed.</description>
			<description locale="en_US">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to add a tab in the submission view where all submission from each contributor are listed.</description>
			<description locale="es_ES">Esta es la primera versión de este módulo que se envía a la Galería de módulos de PKP. Su funcionalidad principal es agregar una pestaña en la vista de envío donde se enumeran todos los envíos de cada colaborador.</description>
			<description locale="pt_BR">Esta é a primeira versão deste plugin a ser enviada para a galeria de plugins da PKP. Sua principal funcionalidade é adicionar uma guia na visualização da submissão, onde todos as submissões de cada contribuidor são listadas.</description>
		</release>
		<release date="2021-06-16" version="1.0.8.0" md5="a3f654491ce8a422f1f0054e2ae6673e">
			<package>https://github.com/lepidus/authorsHistory/releases/download/v1.0.8/authorsHistory.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release fixes a bug that occurred when deleting one of the previous submissions from one of the submission\'s authors</description>
			<description locale="en_US">This release fixes a bug that occurred when deleting one of the previous submissions from one of the submission\'s authors</description>
			<description locale="es_ES">Esta versión corrige un error que se produjo al eliminar uno de los envíos anteriores de uno de los autores del envío</description>
			<description locale="pt_BR">Essa versão corrige um problema que ocorria quando se excluia uma das submissões passadas de um dos autores da submissão</description>
		</release>
		<release date="2021-09-17" version="1.0.9.0" md5="ed7072fc46935d34c07a0e147dd26d7b">
			<package>https://github.com/lepidus/authorsHistory/releases/download/v1.0.9/authorsHistory.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Improves plugin\'s performance and adds checking for cases in which different authors use the same email.</description>
			<description locale="en_US">Improves plugin\'s performance and adds checking for cases in which different authors use the same email.</description>
			<description locale="es_ES">Mejora el rendimiento del módulo y agrega verificación cuando diferentes autores usan el mismo correo electrónico.</description>
			<description locale="pt_BR">Melhora performance do plugin e adiciona verificação para quando diferentes autores usam o mesmo e-mail.</description>
		</release>
		<release date="2022-10-07" version="1.1.0.0" md5="a8c32942871afde7ff5fba698510605a">
			<package>https://github.com/lepidus/authorsHistory/releases/download/v1.1.0/authorsHistory.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release adds translation support for Russian language.</description>
			<description locale="en_US">This release adds translation support for Russian language.</description>
			<description locale="es_ES">Esta versión agrega soporte de traducción para el idioma ruso.</description>
			<description locale="pt_BR">Essa versão adiciona um suporte de tradução para a linguagem russa.</description>
		</release>
		<release date="2023-07-06" version="1.1.1.0" md5="37580225a89d683fe8a3dd5693b81fe4">
			<package>https://github.com/lepidus/authorsHistory/releases/download/v1.1.1/authorsHistory.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release fixes the link for published articles exhibited in authors history.</description>
			<description locale="en_US">This release fixes the link for published articles exhibited in authors history.</description>
			<description locale="es_ES">Esta versión corrige el enlace para los envíos publicados exhibidos en la historia de los autores.</description>
			<description locale="pt_BR">Esta versão corrige o link para artigos publicados exibido no histórico dos autores.</description>
		</release>
	</plugin>
	<plugin category="generic" product="pluginUpdateNotification">
		<name locale="en">Plugins update notification</name>
		<name locale="en_US">Plugins update notification</name>
		<name locale="es_ES">Notificación de actualización de módulos</name>
		<name locale="pt_BR">Notificação de atualização de plugins</name>
		<homepage>https://github.com/lepidus/pluginUpdateNotification</homepage>
		<summary locale="en">This plugin generates a notification whenever an update to a gallery plugin is available</summary>
		<summary locale="en_US">This plugin generates a notification whenever an update to a gallery plugin is available</summary>
		<summary locale="es_ES">Este módulo genera una notificación cada vez que se encuentra disponible una actualización de un módulo de la galería</summary>
		<summary locale="pt_BR">Este plugin gera uma notificação sempre que há uma atualização disponível de um plugin da galeria</summary>
		<description locale="en"><![CDATA[<p>This plugin generates a notification in the Website Settings informing which plugins have an upgrade available at the plugin gallery</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin generates a notification in the Website Settings informing which plugins have an upgrade available at the plugin gallery</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Este módulo genera una notificación en los Ajustes del sítio web que informa qué módulos tienen una actualización disponible en la galería de módulos</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Esse plugin gera uma notificação nas Configurações do Website informando quais plugins possuem uma atualização disponível através da galeria de plugins</p>]]></description>
		<maintainer>
			<name>SciELO Brazil Online Submission and Preprints Unit</name>
			<institution>SciELO in collaboration with Lepidus</institution>
			<email>scielo.submission@scielo.org</email>
		</maintainer>
		<release date="2021-05-19" version="1.2.0.0" md5="afc1389af66b5e0811eb4822f37cee05">
			<package>https://github.com/lepidus/pluginUpdateNotification/releases/download/v1.2.0/pluginUpdateNotification.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to add a notification in the Website Settings informing which plugins have an upgrade available.</description>
			<description locale="en_US">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to add a notification in the Website Settings informing which plugins have an upgrade available.</description>
			<description locale="es_ES">Esta es la primera versión de este módulo que se envía a la Galería de módulos de PKP. Su principal funcionalidad es agregar una notificación en los Ajustes del sítio web informando qué módulos tienen una actualización disponible.</description>
			<description locale="pt_BR">Esta é a primeira versão deste plugin a ser enviada à Galeria de Plugins da PKP. Sua principal funcionalidade é adicionar uma notificação nas Configurações do Website, informando quais plugins possuem uma atualização disponível.</description>
		</release>
		<release date="2023-08-01" version="2.0.0.0" md5="dffca2a2fce29502a645a7b29079cadd">
			<package>https://github.com/lepidus/pluginUpdateNotification/releases/download/v2.0.0/pluginUpdateNotification.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release brings support for OJS, OPS, and OMP in version 3.4.0. It\'s main functionality is to add a notification in the Website Settings informing which plugins have an upgrade available.</description>
			<description locale="es">Esta versión agrega soporte para OJS, OPS y OMP en la versión 3.4.0. Su principal funcionalidad es agregar una notificación en los Ajustes del sítio web informando qué módulos tienen una actualización disponible.</description>
			<description locale="pt_BR">Esta versão traz suporte ao OJS, OPS e OMP na versão 3.4.0. Sua principal funcionalidade é adicionar uma notificação nas Configurações do Website, informando quais plugins possuem uma atualização disponível.</description>
		</release>
	</plugin>
	<plugin category="generic" product="contentAnalysis">
		<name locale="en">Content Analysis</name>
		<name locale="en_US">Content Analysis</name>
		<name locale="es_ES">Análisis del contenido</name>
		<name locale="pt_BR">Análise de Conteúdo</name>
		<homepage>https://github.com/lepidus/contentAnalysis</homepage>
		<summary locale="en">This plugin checks the content of the submitted document for certain submission information and metadata</summary>
		<summary locale="en_US">This plugin checks the content of the submitted document for certain submission information and metadata</summary>
		<summary locale="es_ES">Este módulo verifica el contenido del documento de envío en busca de cierta información de envío y metadatos</summary>
		<summary locale="pt_BR">Este plugin verifica o conteúdo do documento da submissão em busca de certas informações e metadados da submissão</summary>
		<description locale="en"><![CDATA[<p>This plugin checks the content of the submitted document for certain submission information and metadata. Then, it shows a report of which elements had been found on the submission page.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin checks the content of the submitted document for certain submission information and metadata. Then, it shows a report of which elements had been found on the submission page.</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Este módulo verifica el contenido del documento de envío en busca de cierta información de envío y metadatos. Luego muestra un informe de los elementos que se encontraron en la página de envío.</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Este plugin verifica o conteúdo do documento da submissão em busca de certas informações e metadados da submissão. Então, ele exibe um relatório de quais elementos foram encontrados na página da submissão.</p>]]></description>
		<maintainer>
			<name>SciELO Brazil Online Submission and Preprints Unit</name>
			<institution>SciELO in collaboration with Lepidus</institution>
			<email>scielo.submission@scielo.org</email>
		</maintainer>
		<release date="2021-10-06" version="1.2.4.0" md5="46c88057656fa5bfe2e04f8b5ae0aaca">
			<package>https://github.com/lepidus/contentAnalysis/releases/download/v1.2.4/contentAnalysis.tar.gz</package>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This is the first release of this plugin to be sent to PKP Plugin Gallery.</description>
			<description locale="en_US">This is the first release of this plugin to be sent to PKP Plugin Gallery.</description>
			<description locale="es_ES">Esta es la primera versión de este módulo que se envía a la Galería de módulos de PKP.</description>
			<description locale="pt_BR">Esta é a primeira versão deste plugin a ser enviada à Galeria de Plugins da PKP.</description>
		</release>
	</plugin>
	<plugin category="generic" product="piwik">
		<name locale="en">Matomo</name>
		<name locale="en_US">Matomo</name>
		<homepage>https://github.com/pkp/piwik</homepage>
		<summary locale="en">Permits usage statistics tracking using Matomo (formerly Piwik).</summary>
		<summary locale="en_US">Permits usage statistics tracking using Matomo (formerly Piwik).</summary>
		<description locale="en"><![CDATA[<p>The Matomo plugin (formerly Piwik) allows managers to track website usage statistics.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The Matomo plugin (formerly Piwik) allows managers to track website usage statistics.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2017-02-03" version="1.0.0.0" md5="575420845fd2639f2b60d21a08d5cfe1">
			<package>https://github.com/pkp/piwik/releases/download/piwik-1_0_0/piwik-1.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the Piwik plugin.</description>
		</release>
		<release date="2017-10-21" version="1.0.0.0" md5="cc5c4235d82e70a4a854147fee58ebbe">
			<package>https://github.com/pkp/piwik/releases/download/ojs-3_1_0-0/piwik-ojs-3_1_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the Piwik plugin.</description>
		</release>
		<release date="2017-10-21" version="1.0.1.0" md5="054c65ea07a2a4a8b805db0575adca28">
			<package>https://github.com/pkp/piwik/releases/download/ojs-3_1_1-0/piwik-ojs-3_1_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Piwik release for OJS/OMP 3.1.1</description>
		</release>
		<release date="2019-03-04" version="1.0.2.0" md5="a5f116e1b19f5064f72fa4fc78df97d1">
			<package>https://github.com/pkp/piwik/releases/download/v1.0.2-0/piwik-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Piwik release for OJS/OMP 3.1.2</description>
		</release>
		<release date="2019-05-14" version="1.0.2.1" md5="a195e3ac91d0b3a20d02bf10d883d147">
			<package>https://github.com/pkp/piwik/releases/download/v1.0.2-1/piwik-v1.0.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Piwik release for OJS/OMP 3.1.2</description>
		</release>
		<release date="2020-02-27" version="1.0.3.0" md5="ec4692f8af11800ee3771525be3d2bb2">
			<package>https://github.com/pkp/piwik/releases/download/v1.0.3-0/piwik-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Piwik release for OJS/OMP 3.2.0</description>
		</release>
		<release date="2020-06-19" version="1.0.3.1" md5="ced33b79fff6a1984e81794591d81bb2">
			<package>https://github.com/pkp/piwik/releases/download/v1.0.3-1/piwik-v1.0.3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Piwik release for OJS/OMP 3.2.1</description>
		</release>
		<release date="2021-01-29" version="1.0.4.0" md5="adb165b48ccff29afb4f1387e11b0e5c">
			<package>https://github.com/pkp/piwik/releases/download/v1_0_4-0/piwik-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Piwik release for OJS/OMP 3.3.0</description>
		</release>
		<release date="2023-04-11" version="1.0.5.0" md5="7c71a5a8a33f192a7d38919faed7111b">
			<package>https://github.com/pkp/piwik/releases/download/v1_0_5-0/piwik-v1_0_5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Matomo/Piwik release for OJS/OMP 3.4.0</description>
		</release>
	</plugin>
	<plugin category="generic" product="shariff">
		<name locale="en">Shariff Plugin</name>
		<name locale="en_US">Shariff Plugin</name>
		<homepage>https://github.com/ojsde/shariff</homepage>
		<summary locale="en">This plugin integrates the shariff solution for social media buttons in OJS and OMP.</summary>
		<summary locale="en_US">This plugin integrates the shariff solution for social media buttons in OJS and OMP.</summary>
		<description locale="en"><![CDATA[This plugin integrates the shariff solution(<a href="https://github.com/heiseonline/shariff" target="_blank">https://github.com/heiseonline/shariff</a>) to your website, allowing you to add social media buttons to your journal without compromising the privacy of website users.]]></description>
		<description locale="en_US"><![CDATA[This plugin integrates the shariff solution(<a href="https://github.com/heiseonline/shariff" target="_blank">https://github.com/heiseonline/shariff</a>) to your website, allowing you to add social media buttons to your journal without compromising the privacy of website users.]]></description>
		<maintainer>
			<name>Team Open Access und wissenschaftliches Publizieren</name>
			<institution>Universitätsbibliothek, Freie Universität Berlin</institution>
			<email>e-publishing@cedis.fu-berlin.de</email>
		</maintainer>
		<release date="2017-12-04" version="1.0.0.0" md5="e9f2bc26611a4d5632c91257c2edc73f">
			<package>https://github.com/ojsde/shariff/archive/v2_4_6.tar.gz</package>
			<compatibility application="ojs2">
				<version>2.4.6.0</version>
			</compatibility>
			<certification type="partner"/>
			<description>Release of the Shariff plugin for OJS 2.4.6.</description>
		</release>
		<release date="2017-12-04" version="2.0.0.0" md5="3ef89ae22808efc5ead47e8b636ec324">
			<package>https://github.com/ojsde/shariff/releases/download/v2_4_8/shariff-2_4_8.tar.gz</package>
			<compatibility application="ojs2">
				<version>2.4.6.0</version>
			</compatibility>
			<certification type="partner"/>
			<description>Release of the Shariff plugin for OJS 2.4.8.</description>
		</release>
		<release date="2018-04-03" version="3.0.0.0" md5="24988859a0d44b36b3ef8d06ae3a80a0">
			<package>https://github.com/ojsde/shariff/releases/download/v3_0_0/shariff-3_0_0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.0.0</version>
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="partner"/><description>Release of the Shariff plugin for OJS 3.0.0.</description>
		</release>
		<release date="2021-12-08" version="3.3.0.0" md5="8902638153d04e16007601099843cdd3">
			<package>https://github.com/ojsde/shariff/releases/download/v3_3_0/shariff-3_3_0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/><description>Release of the Shariff plugin for OJS 3.3.0.</description>
		</release>
		<release date="2022-08-29" version="3.3.0.1" md5="970b2ae418dec259c2e84e4364cc79cb">
			<package>https://github.com/ojsde/shariff/releases/download/v3_3_0-1/shariff-3_3_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/><description>This release of the Shariff plugin for OJS/OMP 3.3.0 fixes a compatibility issue with PHP 8.</description>
		</release>
		<release date="2023-02-21" version="3.4.0.0" md5="319d33932cc130e592768e6d9575f63a">
			<package>https://github.com/ojsde/shariff/releases/download/v3_4_0/shariff-3_4_0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="partner"/><description>This plugin adds social media buttons to your web site without compromising the privacy of website users.</description>
		</release>
	</plugin>
	<plugin category="generic" product="addThis">
		<name locale="en">AddThis</name>
		<name locale="en_US">AddThis</name>
		<homepage>https://github.com/pkp/addThis</homepage>
		<summary locale="en">Permits social media sharing of published content using AddThis.</summary>
		<summary locale="en_US">Permits social media sharing of published content using AddThis.</summary>
		<description locale="en"><![CDATA[<p><a href="http://www.addthis.com">AddThis</a> permits easy social media sharing by integrating tools for several platforms into a compact set of configurable buttons. This plugin integrates AddThis into OJS/OMP for quick sharing of published content.</p>]]></description>
		<description locale="en_US"><![CDATA[<p><a href="http://www.addthis.com">AddThis</a> permits easy social media sharing by integrating tools for several platforms into a compact set of configurable buttons. This plugin integrates AddThis into OJS/OMP for quick sharing of published content.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2017-04-21" version="1.0.0.0" md5="1b6a84b416f5ccc914a5169db2f75881">
			<package>https://github.com/pkp/addThis/releases/download/1_0_0-0/addThis-3.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the AddThis plugin.</description>
		</release>
		<release date="2017-10-21" version="1.0.0.0" md5="b7d5bc3476588e067d8e4beccfb34b31">
			<package>https://github.com/pkp/addThis/releases/download/ojs-3_1_0-0/addThis-ojs-3_1_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the AddThis plugin.</description>
		</release>
		<release date="2018-04-04" version="1.0.1.0" md5="d735d48687ec298c271d29737f4e53d4">
			<package>https://github.com/pkp/addThis/releases/download/ojs-3_1_1-0/addThis-ojs-3_1_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP 3.1.1.</description>
		</release>
		<release date="2019-03-04" version="1.0.2.0" md5="f26660a3ad4a5dec7f1c78c366472b14">
			<package>https://github.com/pkp/addThis/releases/download/v1.0.2-0/addThis-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP 3.1.2.</description>
		</release>
		<release date="2020-02-27" version="1.0.3.0" md5="afcb49344e6413bf7f9133dd0b828954">
			<package>https://github.com/pkp/addThis/releases/download/v1.0.3-0/addThis-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP 3.2.0.</description>
		</release>
		<release date="2020-06-19" version="1.0.3.1" md5="6816909fa0344928f443f7d535a23d4a">
			<package>https://github.com/pkp/addThis/releases/download/v1_0_3-1/addThis-v1_0_3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP 3.2.1.</description>
		</release>
		<release date="2020-06-25" version="1.0.3.2" md5="cd0f0ec30f9177cdf970d627d5727ba5">
			<package>https://github.com/pkp/addThis/releases/download/v1_0_3-2/addThis-v1_0_3-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP/OPS 3.2.1 (adds OPS support).</description>
		</release>
		<release date="2021-01-29" version="1.0.4.0" md5="e442214520959b5e6c2c05572d56572b">
			<package>https://github.com/pkp/addThis/releases/download/v1_0_4-0/addThis-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP/OPS 3.3.0.</description>
		</release>
		<release date="2023-04-06" version="1.0.5.0" md5="1cda59a260297cc8f5fbbec28ba0fdd2">
			<package>https://github.com/pkp/addThis/releases/download/v1_0_5-0/addThis-v1_0_5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>AddThis for OJS/OMP/OPS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="importexport" product="copernicus">
		<name locale="en">OJS to Copernicus Citation Index xml export plugin</name>
		<name locale="en_US">OJS to Copernicus Citation Index xml export plugin</name>
		<homepage>https://github.com/a-vodka/ojs_copernicus_export_plugin/</homepage>
		<summary locale="en">Allows to export article metadata in Copernicus Index in xml format</summary>
		<summary locale="en_US">Allows to export article metadata in Copernicus Index in xml format</summary>
		<description locale="en"><![CDATA[<p>This release support all necessary items to export issues to Copernicus Citation Index using xml]]></description>
		<description locale="en_US"><![CDATA[<p>This release support all necessary items to export issues to Copernicus Citation Index using xml]]></description>
		<maintainer>
			<name>Oleksii Vodka</name>
			<institution>National Technical University Kharkiv Polytechnic Institute</institution>
			<email>oleksii.vodka@gmail.com</email>
		</maintainer>
		<release date="2019-01-09" version="0.0.3" md5="0a522fdd05358aceee508ca1070da776">
			<package>https://github.com/a-vodka/ojs_copernicus_export_plugin/releases/download/0.0.3/copernicus-ojs3-0.0.3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="partner" />
			<description>This release support all necessary items to export issues to Copernicus Citation Index using xml</description>
		</release>
		<release date="2019-05-23" version="0.0.4.0" md5="46e9ec82eaaced97fbdc0337674ca651">
			<package>https://github.com/a-vodka/ojs_copernicus_export_plugin/releases/download/0.0.4/copernicus-ojs3-0.0.4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>This release support all necessary items to export issues to Copernicus Citation Index using xml</description>
		</release>
	</plugin>
	<plugin category="generic" product="subscriptionSSO">
		<name locale="en">Subscription SSO</name>
		<name locale="en_US">Subscription SSO</name>
		<homepage>https://github.com/asmecher/subscriptionSSO</homepage>
		<summary locale="en">This plugin permits delegation of OJS subscription checks to a third-party web service.</summary>
		<summary locale="en_US">This plugin permits delegation of OJS subscription checks to a third-party web service.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits delegation of OJS subscription checks to a third-party web service.</p><p>See <a href="https://github.com/asmecher/subscriptionSSO" target="_blank">https://github.com/asmecher/subscriptionSSO</a> for details.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits delegation of OJS subscription checks to a third-party web service.</p><p>See <a href="https://github.com/asmecher/subscriptionSSO" target="_blank">https://github.com/asmecher/subscriptionSSO</a> for details.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2017-12-12" version="1.0.1.0" md5="5ba2efb9e8ca18937258e89011fbfe25">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/1_0_1-0/subscriptionSSO-1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the SubscriptionSSO plugin for OJS between 3.0.2 and 3.1.1-x.</description>
		</release>
		<release date="2019-03-04" version="1.0.2.0" md5="3f117d48ecf9e558ff61bd7dafece333">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/v1.0.2-0/subscriptionSSO-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the SubscriptionSSO plugin for OJS 3.1.2.</description>
		</release>
		<release date="2020-03-19" version="1.0.3.1" md5="5e501808ce39dd1f27270f40491125c6">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/v1.0.3-1/subscriptionSSO-v1.0.3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the SubscriptionSSO plugin for OJS 3.2.0.</description>
		</release>
		<release date="2020-06-19" version="1.0.3.3" md5="2691fd7063877b9127d3fb1cedf83ace">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/v1_0_3-3/subscriptionSSO-v1_0_3-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the SubscriptionSSO plugin for OJS 3.2.1.</description>
		</release>
		<release date="2021-02-17" version="1.0.3.4" md5="ff056604e66ed0fe81666b210ebbabc1">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/v1_0_3-4/subscriptionSSO-v1_0_3-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SubscriptionSSO plugin for OJS 3.3.x.</description>
		</release>
		<release date="2021-06-01" version="1.0.3.5" md5="1ee0de9e928e09a0fd535d8ec706aa99">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/v1_0_3-5/subscriptionSSO-v1_0_3-5.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SubscriptionSSO plugin for OJS 3.3.x.</description>
		</release>
		<release date="2023-04-06" version="1.0.4.0" md5="f20ecb45c4ab50c758af0354d5da6b68">
			<package>https://github.com/asmecher/subscriptionSSO/releases/download/v1_0_4-0/subscriptionSSO-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SubscriptionSSO plugin for OJS 3.4.x.</description>
		</release>
	</plugin>
	<plugin category="generic" product="funding">
		<name locale="en">Funding</name>
		<name locale="en_US">Funding</name>
		<homepage>https://github.com/ajnyga/funding/</homepage>
		<summary locale="en">Adds submission funding data using the Crossref funders registry.</summary>
		<summary locale="en_US">Adds submission funding data using the Crossref funders registry.</summary>
		<description locale="en"><![CDATA[<p>This plugin adds submission funding data using the Crossref funders registry, considers the data in the Crossref and DataCite XML export and displays them on the submission view page.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin adds submission funding data using the Crossref funders registry, considers the data in the Crossref and DataCite XML export and displays them on the submission view page.</p>]]></description>
		<maintainer>
			<name>Antti-Jussi Nygård</name>
			<institution/>
			<email>ajnyga@gmail.com</email>
		</maintainer>
		<release date="2019-05-21" version="2.1.1.5" md5="d73dbcc9090c23479dfe885171603041">
			<package>https://github.com/ajnyga/funding/releases/download/2.1.1.5/funding.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Funding data plugin for OJS 3.1.1.x.</description>
		</release>
		<release date="2019-05-21" version="2.1.2.4" md5="ba994ac810d5d1d22e2fbda5a7f5c4af">
			<package>https://github.com/ajnyga/funding/releases/download/2.1.2.4/funding.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Funding data plugin for OJS 3.1.2.x.</description>
		</release>
		<release date="2020-02-27" version="2.1.3.1" md5="a6bda6d071894aa276116507e1d01345">
			<package>https://github.com/ajnyga/funding/releases/download/2.1.3.1/funding.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update for compatibility with v3.2.</description>
		</release>
		<release date="2021-02-07" version="2.1.4.1" md5="60a17f023e44921d1bf190ecb2cd56e6">
			<package>https://github.com/ajnyga/funding/releases/download/2.1.4.1/funding.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update for compatibility with v3.3.</description>
		</release>
		<release date="2023-02-17" version="3.4.0.0" md5="5ba098875697577c5ee87f0231902186">
			<package>https://github.com/ajnyga/funding/releases/download/3.4.0.0/funding.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update for compatibility with v3.4.</description>
		</release>
		<release date="2023-02-17" version="2.1.4.2" md5="e51bad76697fd6746de343a2c4f50414">
			<package>https://github.com/ajnyga/funding/releases/download/2.1.4.2/funding.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>This release adds support for OPS 3.3.0. It also adds translation for Brazilian Portuguese</description>
		</release>
	</plugin>
	<plugin category="generic" product="customHeader">
		<name locale="en">Custom Header Plugin</name>
		<name locale="en_US">Custom Header Plugin</name>
		<homepage>https://github.com/asmecher/customHeader/</homepage>
		<summary locale="en">Permits the addition of custom headers to the website.</summary>
		<summary locale="en_US">Permits the addition of custom headers to the website.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits the addition of custom headers to the website. This can be used e.g. to add arbitrary Javascript to the front-end.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits the addition of custom headers to the website. This can be used e.g. to add arbitrary Javascript to the front-end.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>alec@smecher.bc.ca</email>
		</maintainer>
		<release date="2018-02-19" version="1.0.0.0" md5="84d55e711ee08c948d69dc37d6075ef1">
			<package>https://github.com/asmecher/customHeader/releases/download/ojs-3_1_0-0/customHeader-ojs-3_1_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the custom headers plugin.</description>
		</release>
		<release date="2019-03-04" version="1.0.1.0" md5="e577a0ace206ae3fe9a4351806dee69a">
			<package>https://github.com/asmecher/customHeader/releases/download/v1.0.1-0/customHeader-v1.0.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the custom headers plugin for OJS/OMP 3.1.2.</description>
		</release>
		<release date="2020-02-27" version="1.0.2.0" md5="73df409a9ad1757fdeaf4486a0dcf80d">
			<package>https://github.com/asmecher/customHeader/releases/download/v1.0.2-0/customHeader-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the custom headers plugin for OJS/OMP/OPS 3.2.0.</description>
		</release>
		<release date="2020-06-19" version="1.0.2.1" md5="463a89df0d6986e2f005bb590ab82478">
			<package>https://github.com/asmecher/customHeader/releases/download/v1_0_2-1/customHeader-v1_0_2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the custom headers plugin for OJS/OMP/OPS 3.2.1.</description>
		</release>
		<release date="2021-01-29" version="1.0.3.0" md5="ece026fa333c72a8ce39bd19c0f3408b">
			<package>https://github.com/pkp/customHeader/releases/download/v1_0_3-0/customHeader-v1_0_3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Release of the custom headers plugin for OJS/OMP/OPS 3.3.0.</description>
		</release>
		<release date="2021-03-30" version="1.0.3.1" md5="eab00ca49ea4b929b8df24f5958dceea">
			<package>https://github.com/pkp/customHeader/releases/download/v1_0_3-1/customHeader-v1_0_3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the custom header plugin for OJS/OMP/OPS 3.3.0.</description>
		</release>
		<release date="2023-03-31" version="1.0.4.1" md5="d38f01d1fb0d4f12e47fb3bc8f68eaeb">
			<package>https://github.com/pkp/customHeader/releases/download/v1_0_4-1/customHeader-v1_0_4-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the custom header plugin for OJS/OMP/OPS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="customLocale">
		<name locale="en">Custom Locale Plugin</name>
		<name locale="en_US">Custom Locale Plugin</name>
		<homepage>https://github.com/pkp/customLocale/</homepage>
		<summary locale="en">Permits the customization of interface text.</summary>
		<summary locale="en_US">Permits the customization of interface text.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits the customization of interface text (usually kept in the language files that come with the software) on a per-context (journal, press, or server) basis. This can be used to tweak details that would otherwise require a file modification on the server.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits the customization of interface text (usually kept in the language files that come with the software) on a per-context (journal, press, or server) basis. This can be used to tweak details that would otherwise require a file modification on the server.</p>]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-05-05" version="1.1.0.0" md5="5661e344db3f0959b8c048f4a806fd23">
			<package>https://github.com/pkp/customLocale/releases/download/v1.1.0-0/customLocale-v1.1.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial Plugin Gallery release of the custom locale plugin for OJS/OMP/OPS 3.2.</description>
		</release>
		<release date="2020-06-19" version="1.1.0.1" md5="380f646ce2e9d672693dafc9f421fb01">
			<package>https://github.com/pkp/customLocale/releases/download/v1_1_0-1/customLocale-v1_1_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Initial Plugin Gallery release of the custom locale plugin for OJS/OMP/OPS 3.2.1.</description>
		</release>
		<release date="2021-02-01" version="1.1.0.2" md5="60a21ccef95df9b0313fa98878c7d1bc">
			<package>https://github.com/NateWr/customLocale/releases/download/v1_1_0-2/customLocale-v1_1_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>A minor update that standardizes a couple of language definitions.</description>
		</release>
		<release date="2022-11-01" version="1.1.1.0" md5="45a75c0416f62f4d656f56cc393c101c">
			<package>https://github.com/pkp/customLocale/releases/download/v1_1_1-0/customLocale-v1_1_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Add ability to select other languages than English from the search form.</description>
		</release>
		<release date="2023-04-14" version="1.2.0.0" md5="54bbc194bf5e579640d212689bfa4eba">
			<package>https://github.com/pkp/customLocale/releases/download/v1_2_0-0/customLocale-v1_2_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS/OMP/OPS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="generic" product="jatsTemplate">
		<name locale="en">JATS Template Plugin</name>
		<name locale="en_US">JATS Template Plugin</name>
		<homepage>https://github.com/pkp/jatsTemplate/</homepage>
		<summary locale="en">Permits the automatic generation of a simple (incomplete) JATS XML document.</summary>
		<summary locale="en_US">Permits the automatic generation of a simple (incomplete) JATS XML document.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits the automatic generation of a simple JATS XML document where a better file is not otherwise available. This can be used e.g. in connection with the <a href="https://github.com/pkp/oaiJats">OAI JATS plugin</a> to deliver metadata in a JATS format.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits the automatic generation of a simple JATS XML document where a better file is not otherwise available. This can be used e.g. in connection with the <a href="https://github.com/pkp/oaiJats">OAI JATS plugin</a> to deliver metadata in a JATS format.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>alec@smecher.bc.ca</email>
		</maintainer>
		<release date="2018-08-24" version="1.0.0.0" md5="19dea29a4dc422bcdab1048cccf237ef">
			<package>https://github.com/asmecher/jatsTemplate/releases/download/v1_0_0-0/jatsTemplate-v1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the JATS Template plugin.</description>
		</release>
		<release date="2018-12-10" version="1.0.1.0" md5="352cbc0f6278170716c20e3d7d1a1e00">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_1-0/jatsTemplate-v1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Minimum Viable Product (MVP) release of the JATS Template plugin for Coalition Publi.ca.</description>
		</release>
		<release date="2020-02-27" version="1.0.2.0" md5="6849b1c5c266041e2fae10884cd46d34">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1.0.2-0/jatsTemplate-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the JATS Template plugin for OJS 3.2</description>
		</release>
		<release date="2020-06-02" version="1.0.3.0" md5="d0d29d199680163a1fcd7f07d56475be">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1.0.3-0/jatsTemplate-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the JATS Template plugin for Coalition Publi.ca.</description>
		</release>
		<release date="2020-06-02" version="1.0.4.0" md5="ff111de0880e1710a3ba34ea979e62b7">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1.0.4-0/jatsTemplate-v1.0.4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the JATS Template plugin for OJS 3.2.x</description>
		</release>
		<release date="2022-04-04" version="1.0.4.1" md5="5629454bfbcab08ec2cbf021303f77cb">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_4_1/jatsTemplate-v1_0_4_1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the JATS Template plugin for OJS 3.2.x</description>
		</release>
		<release date="2021-01-29" version="1.0.5.0" md5="1b2284689ee11cd0a357316dfdec2f53">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_5-0/jatsTemplate-v1_0_5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the JATS Template plugin for OJS 3.3.0</description>
		</release>
		<release date="2021-09-13" version="1.0.6.0" md5="f844628e1340e6ad4a62d64eff7357b6">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_6-0/jatsTemplate-v1_0_6-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the JATS Template plugin for OJS 3.3.0</description>
		</release>
		<release date="2022-04-04" version="1.0.6.1" md5="3c5c351efe92825bc8ca8a0607137f48">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_6-1/jatsTemplate-v1_0_6-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the JATS Template plugin for OJS 3.3.0</description>
		</release>
		<release date="2023-03-31" version="1.0.7.1" md5="7d2b59d87421281db11666c323865ed7">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_7-1/jatsTemplate-v1_0_7-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the JATS Template plugin for OJS 3.4.0</description>
		</release>
		<release date="2023-05-30" version="1.0.7.2" md5="9ab3ead0e036a223038997921dcb32d4">
			<package>https://github.com/pkp/jatsTemplate/releases/download/v1_0_7-2/jatsTemplate-v1_0_7-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the JATS Template plugin for OJS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="sword">
		<name locale="en">SWORD Client Plugin</name>
		<name locale="en_US">SWORD Client Plugin</name>
		<homepage>https://github.com/asmecher/sword/</homepage>
		<summary locale="en">Permits the use of the SWORD protocol to deposit documents from OJS into other systems.</summary>
		<summary locale="en_US">Permits the use of the SWORD protocol to deposit documents from OJS into other systems.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits the use of the <a href="http://swordapp.org/sword-v2/">SWORDv2 protocol</a> to allow OJS to deposit documents into other systems.</p><p>The deposit can be performed manually, automatically upon acceptance, and manually by the author.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits the use of the <a href="http://swordapp.org/sword-v2/">SWORDv2 protocol</a> to allow OJS to deposit documents into other systems.</p><p>The deposit can be performed manually, automatically upon acceptance, and manually by the author.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>alec@smecher.bc.ca</email>
		</maintainer>
		<release date="2018-09-06" version="1.0.0.1" md5="fa5789bb3673a5924b0a94f2cb3307dd">
			<package>https://github.com/asmecher/sword/releases/download/v1.0.0-1/sword-v1.0.0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the SWORD client plugin.</description>
		</release>
		<release date="2018-09-25" version="1.0.1.0" md5="3c96e83eeba807f5b2bad9aa867b43e9">
			<package>https://github.com/asmecher/sword/releases/download/v1.0.1-0/sword-v1.0.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SWORD client plugin.</description>
		</release>
		<release date="2019-03-05" version="1.0.1.1" md5="4df54a126d6d1c7181402bf11dbb360a">
			<package>https://github.com/asmecher/sword/releases/download/v1.0.1-1/sword-v1.0.1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SWORD client plugin.</description>
		</release>
		<release date="2019-03-04" version="1.0.2.0" md5="ee1aab70308821d1a3f5ee5ecbb7bdc1">
			<package>https://github.com/asmecher/sword/releases/download/v1.0.2-0/sword-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SWORD client plugin.</description>
		</release>
		<release date="2020-03-05" version="1.0.2.1" md5="208a5e36a01268477140a77eb4d24f77">
			<package>https://github.com/pkp/sword/releases/download/v1.0.2-1/sword-v1.0.2.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SWORD client plugin.</description>
		</release>
		<release date="2020-06-10" version="1.0.3.0" md5="77baca5ec23eaddaccdacdb50708a9ac">
			<package>https://github.com/pkp/sword/releases/download/v1.0.3-0/sword-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SWORD client plugin.</description>
		</release>
		<release date="2020-06-19" version="1.0.4.1" md5="db0a70d6aadaba6b2b7a60fcd3046f05">
			<package>https://github.com/pkp/sword/releases/download/v1_0_4-1/sword-v1_0_4-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the SWORD client plugin.</description>
		</release>
	</plugin>
	<plugin category="oaiMetadataFormats" product="oaiJats">
		<name locale="en">OAI JATS Plugin</name>
		<name locale="en_US">OAI JATS Plugin</name>
		<homepage>https://github.com/pkp/oaiJats/</homepage>
		<summary locale="en">Permits the delivery of JATS XML via the OAI interface.</summary>
		<summary locale="en_US">Permits the delivery of JATS XML via the OAI interface.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits the delivery of JATS XML via the OAI interface. Note that it <strong>does not</strong> generate the JATS document itself -- this will need to be done using the <a href="https://github.com/asmecher/jatsTemplate">JATS Template Plugin</a>, or using an external tool such as Open Typesetting Stack.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits the delivery of JATS XML via the OAI interface. Note that it <strong>does not</strong> generate the JATS document itself -- this will need to be done using the <a href="https://github.com/asmecher/jatsTemplate">JATS Template Plugin</a>, or using an external tool such as Open Typesetting Stack.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>alec@smecher.bc.ca</email>
		</maintainer>
		<release date="2018-08-24" version="1.0.0.0" md5="1eb19a7db060f5e354cd46d04c17aeb7">
			<package>https://github.com/pkp/oaiJats/releases/download/v1.0.0.0/oaiJats-v1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release of the OAI JATS plugin.</description>
		</release>
		<release date="2018-12-10" version="1.0.1.0" md5="4e0c62d41b72065136aef184fa2b00c6">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_1-0/oaiJats-v1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Minimum Viable Product (MVP) release of OAI JATS plugin for Coalition Publi.ca.</description>
		</release>
		<release date="2020-02-27" version="1.0.2.0" md5="d56d784d691333748e6e94b9ca70c903">
			<package>https://github.com/pkp/oaiJats/releases/download/v1.0.2-0/oaiJats-v1.0.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the OAI JATS plugin for OJS 3.2</description>
		</release>
		<release date="2020-06-02" version="1.0.3.0" md5="c1f8d354e5d4c018a8d978490ad5f6be">
			<package>https://github.com/pkp/oaiJats/releases/download/v1.0.3-0/oaiJats-v1.0.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the OAI JATS plugin for OJS 3.2</description>
		</release>
		<release date="2021-01-29" version="1.0.4.0" md5="6d629211603da456512fb3fcec11f3ed">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_4-0/oaiJats-v1_0_4-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release of the OAI JATS plugin for OJS 3.3</description>
		</release>
		<release date="2021-02-04" version="1.0.4.2" md5="8b8a59e98177f49dd923b2a3fb8be3cd">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_4-2/oaiJats-v1_0_4-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the OAI JATS plugin for OJS 3.3</description>
		</release>
		<release date="2021-09-13" version="1.0.4.3" md5="b5a3a7fc6aec1f912220a1b432c04924">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_4-3/oaiJats-v1_0_4-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the OAI JATS plugin for OJS 3.3</description>
		</release>
		<release date="2022-08-02" version="1.0.4.4" md5="0cfa0c8f948c914bc1794d13ff75660c">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_4-4/oaiJats-v1_0_4-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the OAI JATS plugin for OJS 3.3</description>
		</release>
		<release date="2023-03-31" version="1.0.5.0" md5="6dac9f370d7a41252a48319195d87786">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_5-0/oaiJats-v1_0_5-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the OAI JATS plugin for OJS 3.4</description>
		</release>
		<release date="2023-05-30" version="1.0.5.1" md5="f410913290ee799b3c4e6f861d78df5a">
			<package>https://github.com/pkp/oaiJats/releases/download/v1_0_5-1/oaiJats-v1_0_5-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the OAI JATS plugin for OJS 3.4</description>
		</release>
	</plugin>
	<plugin category="blocks" product="keywordCloud">
		<name locale="en">Keyword Cloud Plugin</name>
		<name locale="en_US">Keyword Cloud Plugin</name>
		<homepage>https://github.com/lepidus/ojs3-keywordcloud-plugin</homepage>
		<summary locale="en">A block plugin to provide a tag cloud of article keywords.</summary>
		<summary locale="en_US">A block plugin to provide a tag cloud of article keywords.</summary>
		<description locale="en"><![CDATA[<p>A sidebar block plugin for Open Journal Systems and Open Monograph Press which displays a tag cloud of keywords.</p><p><img src="https://github.com/ali-sokhandan/ojs3-keywordcloud-plugin/raw/master/snapshot.gif"></p>]]></description>
		<description locale="en_US"><![CDATA[<p>A sidebar block plugin for Open Journal Systems and Open Monograph Press which displays a tag cloud of keywords.</p><p><img src="https://github.com/ali-sokhandan/ojs3-keywordcloud-plugin/raw/master/snapshot.gif"></p>]]></description>
		<maintainer>
			<name>Alireza Sokhandan</name>
			<institution></institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-03-10" version="1.0.0.1" md5="81bd132c6c878458899ac5d693680947">
			<package>https://github.com/ali-sokhandan/ojs3-keywordcloud-plugin/releases/download/1.0.0.1/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Initial release of the Keyword Cloud plugin.</description>
		</release>
		<release date="2019-12-06" version="1.0.0.2" md5="aa5186de480b3cf64b47db156b6f607c">
			<package>https://github.com/lepidus/ojs3-keywordcloud-plugin/releases/download/1.0.0.2/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Updated release of the Keyword Cloud plugin for OJS 3.2 support (new maintainer)</description>
		</release>
		<release date="2020-06-03" version="1.1.0.1" md5="146395e10ba32935cc61f7db3fdcf2e1">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v1.1.0.1/keywordCloud-v1.1.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OJS 3.2.0-x and OJS 3.2.1 compatible version. Changes in the JS libraries used.</description>
		</release>
		<release date="2021-01-28" version="1.1.0.4" md5="f76728af417142b73c5d7f3366a64096">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v1.1.0.4/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OJS 3.2.0-x and OJS 3.2.1 compatible version. Fix bug that prevented the keywords to be displayed in the selected language and adds the Swedish language</description>
		</release>
		<release date="2021-05-05" version="1.1.0.5" md5="cd3e9db75368283a2abb185d11d52e4a">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v1.1.0.5/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OJS 3.2.x and OJS 3.3.0-x compatible version. Resize the plugin area, changes the font family to serif and add opacity and font size variation to the keywords.</description>
		</release>
		<release date="2021-09-29" version="1.1.0.6" md5="3ac419c083143c68469c3c6e53f3005a">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v1.1.0.6/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OJS 3.2.x and OJS 3.3.0-x compatible version. Fix an cache-related error that occurred when calling getFileCache with no callback.</description>
		</release>
		<release date="2023-04-04" version="1.1.0.8" md5="452154211554cbdb9a28529319119a6f">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v1.1.0.8/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en_US">This release adds support for OMP</description>
			<description locale="es_ES">Esta versión agrega soporte para OMP</description>
			<description locale="pt_BR">Essa versão adiciona suporte ao OMP</description>
		</release>
		<release date="2023-07-17" version="2.0.0.0" md5="0f164b8f8c67c5e6e87f1811bf178b7d">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v2.0.0.0/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release adds support for 3.4.0-x application releases</description>
			<description locale="es">Esta versión agrega soporte para las versiones de aplicaciones 3.4.0-x</description>
			<description locale="pt_BR">Essa versão adiciona suporte às versões 3.4.0-x das aplicações</description>
		</release>
		<release date="2023-08-10" version="1.1.1.0" md5="983102495ae25b048ab537db7fe07592">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v1.1.1/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en_US">This release normalizes keywords to lowercase and removes duplicated keywords</description>
			<description locale="es_ES">Esta versión normaliza las palabras clave a minúsculas y elimina las palabras clave duplicadas</description>
			<description locale="pt_BR">Essa versão normaliza as palavras-chave para minúsculo e remove palavras-chave duplicadas</description>
		</release>
		<release date="2023-08-10" version="2.0.1.0" md5="b752acc16ef701e5f82ef3cffe4f5aa0">
			<package>https://github.com/lepidus/keywordCloud/releases/download/v2.0.1/keywordCloud.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release normalizes keywords to lowercase and removes duplicated keywords</description>
			<description locale="es">Esta versión normaliza las palabras clave a minúsculas y elimina las palabras clave duplicadas</description>
			<description locale="pt_BR">Essa versão normaliza as palavras-chave para minúsculo e remove palavras-chave duplicadas</description>
		</release>
	</plugin>
	<plugin category="themes" product="bootstrap3">
		<name locale="en">Bootstrap3</name>
		<name locale="en_US">Bootstrap3</name>
		<homepage>https://github.com/NateWr/bootstrap3</homepage>
		<summary locale="en">A template Bootstrap3 theme for OJS 3.1.1+.</summary>
		<summary locale="en_US">A template Bootstrap3 theme for OJS 3.1.1+.</summary>
		<description locale="en"><![CDATA[<p>A template Boostrap3 theme for OJS 3.1.1+.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>A template Boostrap3 theme for OJS 3.1.1+.</p>]]></description>
		<maintainer>
			<name>Nate Wright</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2019-02-25" version="3.1.2.0" md5="92612d832729a7d43381d23551634bc9">
			<package>https://github.com/pkp/bootstrap3/releases/download/3.1.2/bootstrap3-3.1.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.1.2.</description>
		</release>
		<release date="2019-03-25" version="3.1.2.1" md5="e6f35cef567faf9b0b97977023dae905">
			<package>https://github.com/pkp/bootstrap3/releases/download/3.1.2-2/bootstrap3-3.1.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.1.2.</description>
		</release>
		<release date="2019-04-03" version="3.1.2.3" md5="10581251d2bd33e6b26068335127983d">
			<package>https://github.com/pkp/bootstrap3/releases/download/3.1.2-3/bootstrap3-3.1.2-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.1.2.</description>
		</release>
		<release date="2019-04-11" version="3.1.2.4" md5="7f72aefc437684709d43d1f9864ae731">
			<package>https://github.com/pkp/bootstrap3/releases/download/3.1.2-4/bootstrap3-3.1.2.4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.1.2.</description>
		</release>
		<release date="2019-05-01" version="3.1.2.5" md5="eaa768780586afce68ce3efac24b4831">
			<package>https://github.com/pkp/bootstrap3/releases/download/3.1.2-5/bootstrap3-3.1.2.5.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.1.2.</description>
		</release>
		<release date="2019-08-25" version="3.1.2.6" md5="f2b74cc23a4bf15ca57bdccb83d1693f">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_1_2-6/bootstrap3-v3_1_2-6.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>This releases fixes an error with the edit links which appear on the about us, contact and other pages.</description>
		</release>
		<release date="2020-02-27" version="3.2.0.0" md5="c3d1efa61915f532745e83efe53c27fc">
			<package>https://github.com/pkp/bootstrap3/releases/download/3.2.0/bootstrap3-3.2.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release makes the theme compatible with OJS v3.2.</description>
		</release>
		<release date="2020-06-24" version="3.2.0.1" md5="78c87b3f2cfa06f329295c78436b14de">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_2_0-1/bootstrap3-v3_2_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>This release fixes an error when journals are not publishing open access. It also removes the next and previous page navigation on the issue archives page when all issues fit on one page.</description>
		</release>
		<release date="2020-08-25" version="3.2.0.2" md5="89124ce3481246fa58ace3ba0f3d0e87">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_2_0-2/bootstrap3-v3_2_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>This release fixes an error with the edit links for content like the about us and contact pages.</description>
		</release>
		<release date="2021-01-28" version="3.2.0.3" md5="649ea92407af8c772de628000103a8a7">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_2_0-3/bootstrap3-v3_2_0-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This release updates the theme to be compatible with OJS 3.3.</description>
		</release>
		<release date="2021-11-24" version="3.2.0.4" md5="2cd69477a80252c24c6124e5093acd02">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_2_0-4/bootstrap3-v3_2_0-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This is a minor release to remove the .git directory from the release package. No other files were modified.</description>
		</release>
		<release date="2023-02-03" version="3.2.0.5" md5="8dff6f845627d1bfee07440d71483f43">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_2_0-5/bootstrap3-v3_2_0-5.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This is a minor release to improve PHP8.1 compatibility.</description>
		</release>
		<release date="2023-04-11" version="3.3.0.0" md5="8b4650bbb1699374913129fafc301057">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_3_0-0/bootstrap3-v3_3_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS 3.4.0-x</description>
		</release>
		<release date="2023-07-10" version="3.4.0.0" md5="78be2f4a1508b8711943fceb5d3fd449">
			<package>https://github.com/pkp/bootstrap3/releases/download/v3_4_0-0/bootstrap3-v3_4_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Fixes ReCAPTCHA support</description>
		</release>
	</plugin>
	<plugin category="themes" product="classic">
		<name locale="en">Classic</name>
		<name locale="en_US">Classic</name>
		<homepage>https://github.com/pkp/classic</homepage>
		<summary locale="en">An official theme that plays on colour and font contrasts based on literary classicism.</summary>
		<summary locale="en_US">An official theme that plays on colour and font contrasts based on literary classicism.</summary>
		<description locale="en"><![CDATA[<p>An official theme for OJS 3.1.1.2+ designed with a classic style.</p>
		<description locale="en_US"><![CDATA[<p>An official theme for OJS 3.1.1.2+ designed with a classic style.</p>
<p>Classic theme was designed and developed by Sophy Ouch, Vitalii Bezsheiko, John Willinsky, and Kevin Stranack.</p>]]></description>
		<maintainer>
			<name>Vitaliy Bezsheiko</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-07-19" version="1.0.0.0" md5="921b5bffec98a58e4a5c340df0f33c88">
			<package>https://github.com/pkp/classic/releases/download/1.0.0-1/classic-1.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release.</description>
		</release>
		<release date="2019-03-11" version="1.0.0.2" md5="86a656bfbad1398f62aea405b0176c88">
			<package>https://github.com/pkp/classic/releases/download/1.0.0-2/classic-1.0.0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release.</description>
		</release>
		<release date="2019-03-19" version="1.0.1.0" md5="21f7ad108ebd781ae302d582e8bacb6c">
			<package>https://github.com/pkp/classic/releases/download/1.0.1/classic-1.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release.</description>
		</release>
		<release date="2020-02-25" version="1.0.3.0" md5="dd2827322475689e45a29a2a92c9223a">
			<package>https://github.com/pkp/classic/releases/download/1.0.3/classic-1.0.3.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release makes the theme compatible with OJS v3.2.</description>
		</release>
		<release date="2020-03-18" version="1.0.3.1" md5="2a28097057cb44cd57b034fe50853370">
			<package>https://github.com/pkp/classic/releases/download/1.0.3-1/classic-1.0.3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release.</description>
		</release>
		<release date="2020-06-19" version="1.0.4.0" md5="c9945a4c6ca7b6e98ce5be8aa2639d44">
			<package>https://github.com/pkp/classic/releases/download/1.0.4/classic-1.0.4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>This update includes better contrast for some elements, support for catalog category page and minor bugfixes</description>
		</release>
		<release date="2020-12-06" version="1.1.0.0" md5="d50b6d5e4cb09bdbf14086a26c48df87">
			<package>https://github.com/pkp/classic/releases/download/1.1.0/classic-1.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>This release updates a theme to be compatible with OJS 3.3.0.1, fixes display of multilingual keywords on article landing page as well as displays article\'s license terms, and adds section policies on a submission page</description>
		</release>
		<release date="2022-10-28" version="1.1.1.0" md5="7bd73866300bb7993ef950ddbcea3ca2">
			<package>https://github.com/pkp/classic/releases/download/1.1.1/classic-1.1.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Adds compatibility with PHP 8.1</description>
		</release>
		<release date="2023-03-02" version="1.1.2.0" md5="dd1a5c5cfbc26499a697997c2fde6bc4">
			<package>https://github.com/pkp/classic/releases/download/1.1.2/classic-1.1.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Compatibility release for OJS 3.4.0</description>
		</release>
		<release date="2023-08-09" version="1.1.2.1" md5="ef3e80015a74de7ef1113bfac66f8590">
			<package>https://github.com/pkp/classic/releases/download/1.1.2.1/classic-1.1.2.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="themes" product="healthSciences">
		<name locale="en">Health Sciences</name>
		<name locale="en_US">Health Sciences</name>
		<homepage>https://github.com/pkp/healthSciences</homepage>
		<summary locale="en">An official theme designed to maximize legibility and content clarity.</summary>
		<summary locale="en_US">An official theme designed to maximize legibility and content clarity.</summary>
		<description locale="en"><![CDATA[<p>An official theme designed for health science journals or any journal that wants a clean, modern appearance. The theme features a light grey-blue color scheme that evokes medical settings, but the color can be changed to fit any journal\'s needs.</p>
		<description locale="en_US"><![CDATA[<p>An official theme designed for health science journals or any journal that wants a clean, modern appearance. The theme features a light grey-blue color scheme that evokes medical settings, but the color can be changed to fit any journal\'s needs.</p>
<p>Health Sciences theme was designed and developed by Sophy Ouch, Nate Wright, Vitalii Bezsheiko, John Willinsky, and Kevin Stranack.</p>]]></description>
		<maintainer>
			<name>Vitaliy Bezsheiko</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-04-24" version="1.0.0.0" md5="a131b0b5fcea8e422b38bda3ceead2f5">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.0/healthSciences-v1.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release.</description>
		</release>
		<release date="2018-06-19" version="1.0.1.0" md5="f32a0b4ac8bc59bf7524aed00d740a1f">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.1/healthSciences-v1.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release (XSS)</description>
		</release>
		<release date="2018-07-30" version="1.0.2.0" md5="cc8318fd2f607e237147e0acaf9390d2">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.2/healthSciences-v.1.0.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release fixes a few visual bugs and provides styles for subscription pages.</description>
		</release>
		<release date="2018-12-31" version="1.0.3.0" md5="3406e67c9b31972d0cc94949c2e51559">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.3/healthSciences-1.0.3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>This is a bugfix release.</description>
		</release>
		<release date="2019-03-05" version="1.0.4.0" md5="5976b91fae05aabdf920f16342dd2a41">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.4/healthSciences-1.0.4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>This is a bugfix release.</description>
		</release>
		<release date="2020-02-25" version="1.0.6.0" md5="04bb9838afbcabddd5a54b5743687308">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.6/healthSciences-1.0.6.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release makes the theme compatible with OJS v3.2.</description>
		</release>
		<release date="2020-03-20" version="1.0.6.1" md5="beaf512d288f19edd3bc227a736e2269">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.6.1/healthSciences-1.0.6.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release.</description>
		</release>
		<release date="2020-06-19" version="1.0.7.0" md5="d89a9b246b11bd91f2e6b649b6f0d862">
			<package>https://github.com/pkp/healthSciences/releases/download/1.0.7.0/healthSciences-1.0.7.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>This update contains fixes for small layout and javascript bugs, adds encoding of emails on the contact page with Smarty native plugin and includes localization files converted to Weblate</description>
		</release>
		<release date="2020-12-06" version="1.1.0.0" md5="6f01b281d40eb67bc50eb355b1ad7e99">
			<package>https://github.com/pkp/healthSciences/releases/download/1.1.0/healthSciences-1.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>This release updates a theme to be compatible with OJS 3.3.0.1, fixes display of multilingual keywords on article landing page as well as displays article\'s license terms, and adds section policies on a submission page</description>
		</release>
		<release date="2020-10-28" version="1.1.1.0" md5="49fd4c9f56babd644325692e004f0656">
			<package>https://github.com/pkp/healthSciences/releases/download/1.1.1/healthSciences-1.1.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Adds compatibility with PHP 8.1</description>
		</release>
		<release date="2023-03-02" version="1.1.2.0" md5="17d9943067afa6d9952bb392d810382f">
			<package>https://github.com/pkp/healthSciences/releases/download/1.1.2/healthSciences-1.1.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.4.0.0</version>
			</compatibility>
			<description>Compatibility release for OJS 3.4.0</description>
		</release>
		<release date="2023-08-09" version="1.1.2.1" md5="bd99334cd90b7bcefab52474b75980ec">
			<package>https://github.com/pkp/healthSciences/releases/download/1.1.2.1/healthSciences-1.1.2.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="themes" product="defaultManuscript">
		<name locale="en">Manuscript (Default child theme)</name>
		<name locale="en_US">Manuscript (Default child theme)</name>
		<homepage>https://github.com/pkp/defaultManuscript</homepage>
		<summary locale="en">A clean, simple theme with a boxed layout that mimics a paper document.</summary>
		<summary locale="en_US">A clean, simple theme with a boxed layout that mimics a paper document.</summary>
		<description locale="en"><![CDATA[<p>A clean, simple theme with a boxed layout that mimics a paper document. It features a similar layout as the default theme, with a different look and feel for your OJS 3 journal. You can customize the primary and accent colors to match your branding.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>A clean, simple theme with a boxed layout that mimics a paper document. It features a similar layout as the default theme, with a different look and feel for your OJS 3 journal. You can customize the primary and accent colors to match your branding.</p>]]></description>
		<maintainer>
			<name>Nate Wright</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2017-02-07" version="1.0.0.0" md5="2d400e6321130a7ea624639adf1a6c9a">
			<package>https://github.com/pkp/defaultManuscript/releases/download/1.0.0/defaultManuscript-1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.0.2.0</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release.</description>
		</release>
		<release date="2017-10-24" version="1.0.1.0" md5="96d8c468065e9702218800b00b25f5df">
			<package>https://github.com/pkp/defaultManuscript/releases/download/1.0.1/defaultManuscript-1.0.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
			</compatibility>
			<certification type="official" />
			<description>This release provides a few updates to improve compatibility with OJS 3.1, and adds a German translation.</description>
		</release>
		<release date="2018-04-10" version="1.0.2.0" md5="ec2d5884b32a268f3894404f7846c903">
			<package>https://github.com/pkp/defaultManuscript/releases/download/1.0.2/defaultManuscript-1.0.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release provides a few updates to improve compatibility with OJS 3.1.1/3.1.2, and updates the German and Spanish translations.</description>
		</release>
		<release date="2020-02-27" version="1.0.3.0" md5="272b641ed37a75e073b5344dc3106937">
			<package>https://github.com/pkp/defaultManuscript/releases/download/1.0.3/defaultManuscript-1.0.3.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>This release makes the theme compatible with OJS v3.2.</description>
		</release>
		<release date="2021-01-28" version="1.0.3.1" md5="b5364afaf97fc3d44db4582ac1e5259d">
			<package>https://github.com/pkp/defaultManuscript/releases/download/v1_0_3-1/defaultManuscript-v1_0_3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>A minor update to support changes to the default theme in OJS 3.3.</description>
		</release>
	</plugin>
	<plugin category="themes" product="material">
		<name locale="en">Material Theme</name>
		<name locale="en_US">Material Theme</name>
		<homepage>https://github.com/madi-nuralin/material.git</homepage>
		<summary locale="en">Material Theme (MDBootstrap based)</summary>
		<summary locale="en_US">Material Theme (MDBootstrap based)</summary>
		<description locale="en"><![CDATA[<p>Material Theme (MDBootstrap based), adaptive stylesheet for both fronted and backend templates.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>Material Theme (MDBootstrap based), adaptive stylesheet for both fronted and backend templates.</p>]]></description>
		<maintainer>
			<name>Madi Nuralin</name>
			<institution>International Information Technology University</institution>
			<email>nmdbzk@gmail.com</email>
		</maintainer>
		<release date="2021-08-26" version="1.0.0.0" md5="d2125c06df6bbf4fbbaf8780a207d803">
			<package>https://github.com/madi-nuralin/material/releases/download/v1_0_0-0/material-v1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Initial release.</description>
		</release>
		<release date="2021-09-10" version="1.0.0.1" md5="f520bdda5c21404f50b5cbcf6fca21ff">
			<package>https://github.com/madi-nuralin/material/releases/download/v1_0_0-1/material-v1_0_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>A minor update to support the material theme in OJS 3.3.0 with bugfixes.</description>
		</release>
		<release date="2022-04-26" version="2.0.0.0" md5="7b38d448a69465aab9617a659a5389b4">
			<package>https://github.com/madi-nuralin/material/releases/download/v2_0_0-0/material-v2_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Restyled Material 2.0.0 theme for OJS 3.3.0 with bugfixes.</description>
		</release>
		<release date="2022-10-07" version="2.0.1.0" md5="a90f1f3826e6dd7999199d69e8940ebe">
			<package>https://github.com/madi-nuralin/material/releases/download/v2_0_1-0/material-v2_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>This release upgrades Material plugin to version 2.0.1-0</description>
		</release>
		<release date="2023-02-03" version="2.1.0.0" md5="03ad0d44d87047bf0275b40fd918338c">
			<package>https://github.com/madi-nuralin/material/releases/download/v2_1_0-0/material-v2_1_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Material plugin (version 2.1.1-0), includes localization extension.</description>
		</release>
		<release date="2023-08-03" version="2.2.0.0" md5="5297951b665175a35a7fb495fd7695a4">
			<package>https://github.com/madi-nuralin/material/releases/download/v2_2_0-0/material-v2_2_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Material plugin, v2.2.0-0. The OJS 3.4 compatible release.</description>
		</release>
	</plugin>
	<plugin category="generic" product="texture">
		<name locale="en">Texture plugin</name>
		<name locale="en_US">Texture plugin</name>
		<homepage>https://github.com/pkp/texture</homepage>
		<summary locale="en">Integrates the Substance Texture JATS XML Editor with OJS.</summary>
		<summary locale="en_US">Integrates the Substance Texture JATS XML Editor with OJS.</summary>
		<description locale="en"><![CDATA[<p>This plugin integrates the <a target="_new" href="http://substance.io/texture">Texture</a> JATS XML editor with OJS, permitting in-place editing of article content.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin integrates the <a target="_new" href="http://substance.io/texture">Texture</a> JATS XML editor with OJS, permitting in-place editing of article content.</p>]]></description>
		<maintainer>
			<name>Dulip Withanage</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-09-14" version="1.0.0.0" md5="8b0051aaf9fa94077ba5ef175e52c3d0">
			<package>https://github.com/pkp/texture/releases/download/v1.0.0-0/texture-v1.0.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>This is the initial release of the plugin.</description>
		</release>
		<release date="2019-03-07" version="1.0.0.1" md5="27c8108729e538f9e39897e9dbe2ba0c">
			<package>https://github.com/pkp/texture/releases/download/3_1_2-0/texture-3_1_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>This is a compatibility release of the plugin for OJS 3.1.2.</description>
		</release>
		<release date="2019-03-07" version="2.2.0.0" md5="14731c01c875f9b596cca2f62bf56120">
			<package>https://github.com/pkp/texture/releases/download/v2.2.0.0/texture-3_1_2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release upgrades Texture to version 2.2.0.</description>
		</release>
		<release date="2019-11-11" version="2.2.0.1" md5="2212ff45865cba54c0ce9d594e9bdddd">
			<package>https://github.com/pkp/texture/releases/download/v2.2.0.1/texture-stable-3_1_2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>This release upgrades Texture to version 2.2.0.1</description>
		</release>
		<release date="2020-02-24" version="2.2.1.0" md5="cfc79926e1c358280f7616a18d7cba59">
			<package>https://github.com/pkp/texture/releases/download/v2.2.1.0/texture-v2.2.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>This release adds support for importing and exporting the DAR format.</description>
		</release>
		<release date="2020-02-24" version="2.2.2.0" md5="21ab7c2151462f5f331196458b18fe69">
			<package>https://github.com/pkp/texture/releases/download/v2.2.2.0/texture-v2.2.2.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>This release adapts the plugin for compatibility with OJS 3.2 and support for importing and exporting the DAR format.</description>
		</release>
		<release date="2020-06-04" version="2.3.1.0" md5="31c8f75873a3908869a07f5db1bf01c7">
			<package>https://github.com/pkp/texture/releases/download/v2.3.1.0/texture-v2.3.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>OJS 3.1.2 version : This release updates texture editor 2.3 + and bug fixes </description>
		</release>
		<release date="2020-06-04" version="2.3.2.0" md5="552e25e3bc384f450712cbbec125c199">
			<package>https://github.com/pkp/texture/releases/download/v2.3.2.0/texture-v2.3.2.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>OJS 3.2 version : This release updates texture editor 2.3 + and bug fixes </description>
		</release>
		<release date="2020-08-16" version="2.4.2.0" md5="120c06ee188de82ff432602f9f14eed9">
			<package>https://github.com/pkp/texture/releases/download/v2.4.2.0/texture-v2.4.2.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>OJS 3.2+ (V2.4.2.0) Final substance texture version release </description>
		</release>
		<release date="2020-08-16" version="2.4.1.0" md5="d7e3d60cb9488b36eb01e8e240194629">
			<package>https://github.com/pkp/texture/releases/download/v2.4.1.0/texture-v2.4.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>OJS 3.1 (V2.4.1.0) Final substance texture version release</description>
		</release>
		<release date="2020-11-17" version="2.4.3.3" md5="d117d9494a0d1712e7009304f3b30010">
			<package>https://github.com/pkp/texture/releases/download/v2_4_3-3/texture-v2_4_3-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>OJS 3.2+ (V2.4.3.3) JATS mixed citation support for substance texture</description>
		</release>
		<release date="2021-02-17" version="2.4.3.8" md5="228c773c4ec32c32b6dec6922f71be9e">
			<package>https://github.com/pkp/texture/releases/download/v2_4_3-8/texture-v2_4_3-8.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>This release updates texture plugin compatible with OJS 3.3.0.0 and after versions </description>
		</release>
		<release date="2021-09-21" version="2.4.3.9" md5="17b07569356e49f4498fb3e7947bf9f6">
			<package>https://github.com/pkp/texture/releases/download/v2_4_3-9/texture-v2_4_3-9.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description><![CDATA[<p>Version 2.4.3.9 adds following enhancements to the texture plugin for OJS 3.3</p><ul><li>Create galley from XML files for JATS XML files</li><li>By galley creation all dependent files are copied to the galley</li><li>By user selection following metadata blocks are added or updated to the jats metadata section<ul><li>Journal metadata</li><li>Publication history (recieved, accepted and published date )</li><li>published date can be either taken over or modified in the create galley modal</li><li>First page and last page of the article in a volume</li><li>Create the cc-by license block inserted in the journal. Additionally, If a ported cc-by url is added it will be mapped accordingly.</li></ul></li></ul>]]></description>
		</release>
	</plugin>
	<plugin category="generic" product="crossrefReferenceLinking">
		<name locale="en">Crossref Reference Linking Plugin</name>
		<name locale="en_US">Crossref Reference Linking Plugin</name>
		<homepage>https://github.com/pkp/crossrefReferenceLinking</homepage>
		<summary locale="en">Automatically add the extracted article references to the DOI registration with Crossref</summary>
		<summary locale="en_US">Automatically add the extracted article references to the DOI registration with Crossref</summary>
		<description locale="en"><![CDATA[<p>This plugin will automatically add the extracted article references to the DOI registration with Crossref. Crossref will then automatically check if any DOIs can be found for the submitted references. Shortly after that, using the scheduled task, the plugin will check for the found references DOIs. If article references change once they are registered, the article DOI with the new references will have to be registered anew. Then the check for the found references DOIs will be done again.</p>
		<description locale="en_US"><![CDATA[<p>This plugin will automatically add the extracted article references to the DOI registration with Crossref. Crossref will then automatically check if any DOIs can be found for the submitted references. Shortly after that, using the scheduled task, the plugin will check for the found references DOIs. If article references change once they are registered, the article DOI with the new references will have to be registered anew. Then the check for the found references DOIs will be done again.</p>
<p>This plugin requires Crossref DOIs to be assigned to articles, article references to be separately entered and extracted, as well as article DOIs to be deposited to Crossref from within OJS. It uses the Crossref Export/Registration plugin settings: Crossref credentials (username and password), as well as the setting for the testing mode.</p>]]></description>
		<maintainer>
			<name>Bozana Bokan</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2019-03-27" version="1.0.0.0" md5="5f03ccfc6688f1f63a97117c7c1cf253">
			<package>https://github.com/pkp/crossrefReferenceLinking/releases/download/v1.0.0-0/crossrefReferenceLinking-v1.0.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>This is the initial release of the plugin.</description>
		</release>
		<!-- release date="2019-06-19" version="1.0.1.1" md5="11e8c5f25350d334054cc57036ab5512">
			<package>https://github.com/pkp/crossrefReferenceLinking/releases/download/v1_0_1-1/crossrefReferenceLinking-v1_0_1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the plugin for OJS 3.2.1.</description>
		</release -->
		<release date="2021-03-17" version="1.0.2.0" md5="5a092b6f3da44f02ea6515bb4a8c0f45">
			<package>https://github.com/pkp/crossrefReferenceLinking/releases/download/v1_0_2-0/crossrefReferenceLinking-v1_0_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the plugin for OJS 3.3.0.</description>
		</release>
		<release date="2021-03-27" version="1.0.2.1" md5="07407224b3fa44ced7a0cb242561df76">
			<package>https://github.com/pkp/crossrefReferenceLinking/releases/download/v1_0_2-1/crossrefReferenceLinking-v1_0_2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the plugin for OJS 3.3.0</description>
		</release>
		<release date="2023-07-17" version="2.0.0.0" md5="d4b77aa8e32615cc5b71805e5cd97c7d">
			<package>https://github.com/pkp/crossrefReferenceLinking/releases/download/v2_0_0-0/crossrefReferenceLinking-v2_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release of the plugin for OJS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="themes" product="immersion">
		<name locale="en">Immersion</name>
		<name locale="en_US">Immersion</name>
		<homepage>https://github.com/pkp/immersion</homepage>
		<summary locale="en">An official theme focused on full-page visuals, large typefaces, and bold color blocks.</summary>
		<summary locale="en_US">An official theme focused on full-page visuals, large typefaces, and bold color blocks.</summary>
		<description locale="en"><![CDATA[<p>The Immersion theme emphasizes the reading experience and offers bold design options such as a full-width header image and per-section color choices. This theme may work best for arts and culture journals which want to present a more ambitious visual profile.</p>
		<description locale="en_US"><![CDATA[<p>The Immersion theme emphasizes the reading experience and offers bold design options such as a full-width header image and per-section color choices. This theme may work best for arts and culture journals which want to present a more ambitious visual profile.</p>
<p>Immersion theme was designed and developed by Sophy Ouch, Vitalii Bezsheiko, John Willinsky, and Kevin Stranack.</p>]]></description>
		<maintainer>
			<name>Vitalii Bezsheiko</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-11-28" version="1.0.0.0" md5="8f032a4d974e8c3873d9600bcb6f47e1">
			<package>https://github.com/pkp/immersion/releases/download/1.0.0/immersion-1.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release.</description>
		</release>
		<release date="2018-12-26" version="1.0.1.0" md5="03f6cca6f0f45e13728c9789a169260e">
			<package>https://github.com/pkp/immersion/releases/download/1.0.1/immersion-1.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release.</description>
		</release>
		<release date="2019-03-10" version="1.0.1.1" md5="8c46d2d6397ded873bcbd03961232839">
			<package>https://github.com/pkp/immersion/releases/download/1.0.1-1/immersion-1.0.1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release.</description>
		</release>
		<release date="2019-03-19" version="1.0.2.0" md5="031a31d3888ce693813d61defcb6961d">
			<package>https://github.com/pkp/immersion/releases/download/1.0.2/immersion-1.0.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Compatibility release.</description>
		</release>
		<release date="2019-07-02" version="1.0.3.0" md5="a642b7e97c80b77f558bc00f2602f105">
			<package>https://github.com/pkp/immersion/releases/download/1.0.3/immersion-1.0.3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>This adds an option to display the journal description on the journal landing page. It also fixes a bug related to issue galleys and an error that occurred when creating a new issue.</description>
		</release>
		<release date="2020-02-25" version="1.0.4.0" md5="fe9ac5f3e568ae1540d2447969d95619">
			<package>https://github.com/pkp/immersion/releases/download/1.0.4.0/immersion-1.0.4.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>This release makes the theme compatible with OJS v3.2.</description>
		</release>
		<release date="2020-03-18" version="1.0.4.1" md5="b8f79cd49ce34add7e71127026a56a87">
			<package>https://github.com/pkp/immersion/releases/download/1.0.4.1/immersion-1.0.4.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release.</description>
		</release>
		<release date="2020-06-19" version="1.0.5" md5="2d9315eeb98e759ea0e83f1c26c4bffb">
			<package>https://github.com/pkp/immersion/releases/download/1.0.5.0/immersion-1.0.5.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>This release includes minor bugfixes</description>
		</release>
		<release date="2020-12-07" version="1.1.0.0" md5="641d06cbd8f1d623c9824afd2fc33d39">
			<package>https://github.com/pkp/immersion/releases/download/1.1.0.0/immersion-1.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>This release updates a theme to be compatible with OJS 3.3.0.1 and fixes minor bugs</description>
		</release>
		<release date="2022-10-28" version="1.1.1.0" md5="ccd7d1d983b47a63ab9e85e67c94d72f">
			<package>https://github.com/pkp/immersion/releases/download/1.1.1/immersion-1.1.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Adds compatibility with PHP 8.1</description>
		</release>
		<release date="2023-03-01" version="1.1.2.0" md5="7339f0d3946c5a1dc6391f02d6044cef">
			<package>https://github.com/pkp/immersion/releases/download/1.1.2/immersion-1.1.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>The release updates the theme to be compatible with OJS 3.4.0</description>
		</release>
		<release date="2023-08-02" version="1.1.2.1" md5="e13514e3136853dc7605c9e7c2a4cc5e">
			<package>https://github.com/pkp/immersion/releases/download/1.1.2.1/immersion-1.1.2.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.4.0</description>
		</release>
		<release date="2023-08-09" version="1.1.2.2" md5="38222b6a05fbd85be8e8e15adbce4410">
			<package>https://github.com/pkp/immersion/releases/download/1.1.2.2/immersion-1.1.2.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="generic" product="orcidProfile">
		<name locale="en">ORCiD Profile</name>
		<name locale="en_US">ORCiD Profile</name>
		<homepage>https://github.com/pkp/orcidProfile</homepage>
		<summary locale="en">ORCiD integration for users and authors</summary>
		<summary locale="en_US">ORCiD integration for users and authors</summary>
		<description locale="en"><![CDATA[<p>The ORCiD Profile plugin integrates support for <a href="https://orcid.org/">ORCiD</a> identifiers for authors and users. This includes tools to submit new content to an author\'s ORCiD profile.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The ORCiD Profile plugin integrates support for <a href="https://orcid.org/">ORCiD</a> identifiers for authors and users. This includes tools to submit new content to an author\'s ORCiD profile.</p>]]></description>
		<maintainer>
			<name>Dulip Withanage; Clinton Graham; Nils Weiher</name>
			<institution>Public Knowledge Project; Pittsburgh University; Heidelberg University</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2019-03-13" version="1.1.1.0" md5="b57ec511e5fdbbdc733f3cddd55d85d5">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.1-0/orcidProfile-v1.1.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.1.2.</description>
		</release>
		<release date="2019-03-21" version="1.1.1.1" md5="711ec5c471e707a51c600e790159c0b9">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.1-1/orcidProfile-v1.1.1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.1.2.</description>
		</release>
		<release date="2020-04-01" version="1.1.1.2" md5="4849525c754d7b1553ec66971825f78c">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.1-2/orcidProfile-v1.1.1-2.tar.gz</package>
			<compatibility application="ojs2">
					<version>3.1.2.0</version>
					<version>3.1.2.1</version>
					<version>3.1.2.2</version>
					<version>3.1.2.3</version>
					<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Feature enhancements release for OJS 3.1.2.</description>
		</release>
		<release date="2020-05-03" version="1.1.1.3" md5="5aea4da1ddcf4cb5331b5b4f88083419">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.1-3/orcidProfile-v1.1.1-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.1.2.</description>
		</release>
		<release date="2020-02-27" version="1.1.2.0" md5="2f8c0d3014522421fa682d7f6adb7006">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.2-0/orcidProfile-v1.1.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Compatibility release for OJS/OPS 3.2.0.</description>
		</release>
		<release date="2020-03-30" version="1.1.2.1" md5="80440cd77056966c8d34ba45016612b4">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.2-1/orcidProfile-v1.1.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS/OPS 3.2.0.</description>
		</release>
		<release date="2020-05-03" version="1.1.2.2" md5="3228bd3289aa9eda82bae35262eaee7b">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.2-2/orcidProfile-v1.1.2-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS/OPS 3.2.0.</description>
		</release>
		<release date="2020-05-31" version="1.1.1.4" md5="733090ef86f0fc7e45cf83cbe285c08b">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.1-4/orcidProfile-v1.1.1-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS 3.1.2.</description>
		</release>
		<release date="2020-05-31" version="1.1.2.3" md5="7ed3c402d95148b17c12d49c8cc77c62">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.2-3/orcidProfile-v1.1.2-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS/OPS 3.2.0.</description>
		</release>
		<release date="2020-06-19" version="1.1.2.4" md5="70fb5f114ae83090f8bc2154a07fe4f1">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-4/orcidProfile-v1_1_2-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS/OPS 3.2.1.</description>
		</release>
		<release date="2020-08-16" version="1.1.2.5" md5="8a137e8310efece1d81ba598cbbf27e8">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-5/orcidProfile-v1_1_2-5.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS/OPS 3.2.1. (Different API help texts) </description>
		</release>
		<release date="2020-10-27" version="1.1.1.5" md5="1d076218fbfce6a9479d14c561e9d282">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1.1.1-5/orcidProfile-v1.1.1-5.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>This release fixes a problem where multiple ORCID icons sometimes appeared on the article landing page.</description>
		</release>
		<release date="2021-02-26" version="1.1.1.8" md5="045e7d98a454756f3f1041ea73c10eee">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_1-8/orcidProfile-v1_1_1-8.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>API failure handling</description>
		</release>
		<release date="2021-02-28" version="1.1.1.12" md5="a0fb6fd1295fde47300963d286014bca">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_1-12/orcidProfile-v1_1_1-12.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Disable for  site-index, disable by cleint Id and secret errors</description>
		</release>
		<release date="2020-12-05" version="1.1.2.6" md5="23322f89d69629b02daa4800d7a2f8dd">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-6/orcidProfile-v1_1_2-6.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release fixes API calls between ORCID and OJS </description>
		</release>
		<release date="2021-02-28" version="1.1.2.7" md5="a010f370569e76081dfb44ff0105fad8">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-7/orcidProfile-v1_1_2-7.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Disable for  site-index, disable by cleint Id and secret errors</description>
		</release>
		<release date="2021-01-27" version="1.1.2.8" md5="c00bee25cd3b545faefe021267f4b00a">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-8/orcidProfile-v1_1_2-8.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Adds support for OJS/OPS 3.3, Better error hanlding for Guzzle,  Member API publication update</description>
		</release>
		<release date="2021-03-07" version="1.1.2.14" md5="22e355bba864f304f7f9e462e5a692b3">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-14/orcidProfile-v1_1_2-14.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Disable site-index mails, Client-Secret and ID validation </description>
		</release>
		<release date="2021-05-16" version="1.1.2.17" md5="e63caf3ea23ff606e7e3b0b9d5dba9dd">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-17/orcidProfile-v1_1_2-17.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Orcid API V3.0 support </description>
		</release>
		<release date="2021-05-22" version="1.1.2.18" md5="159699bb8463d8fa54d4293172e13025">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-18/orcidProfile-v1_1_2-18.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Orcid API V3.0 support </description>
		</release>
		<release date="2021-06-02" version="1.1.2.19" md5="cdb6ff76f95ac18ebf1eed3a7493ea03">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-19/orcidProfile-v1_1_2-19.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Orcid API V3.0 support - update </description>
		</release>
		<release date="2021-08-22" version="1.1.2.20" md5="f1ad99ac4d917ea1d34a3d32b8c517a8">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-20/orcidProfile-v1_1_2-20.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Plugin configuration enhancement </description>
		</release>
		<release date="2021-08-31" version="1.1.2.22" md5="afed8ab2d5bec734b74c06a33e45334a">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-22/orcidProfile-v1_1_2-22.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Plugin configuration enhancement </description>
		</release>
		<release date="2021-11-28" version="1.1.2.24" md5="8a701048412e766618773750ecd7c60a">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-24/orcidProfile-v1_1_2-24.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Reviewer credit support</description>
		</release>
		<release date="2021-11-29" version="1.1.2.25" md5="0acd78aecd0023114bf269a68fbd162b">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-25/orcidProfile-v1_1_2-25.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Reviewer credit support</description>
		</release>
		<release date="2022-01-17" version="1.1.2.26" md5="195e409b0b8a5b8e0a58e770d012bb3f">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-26/orcidProfile-v1_1_2-26.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Bug fix release </description>
		</release>
		<release date="2022-03-07" version="1.1.3.1" md5="bfb71a6792f1d39c1eebc602bb7fc7b8">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-1/orcidProfile-v1_1_3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Bump version to resolve conflicts</description>
		</release>
		<release date="2022-05-15" version="1.1.3.2" md5="ee7edf64187f28e9a85eabc32c5905b5">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-2/orcidProfile-v1_1_3-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix Contributor Email</description>
		</release>
		<release date="2022-07-11" version="1.1.2.28" md5="169557e599e1b7e22a18f919fb24589c">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_2-28/orcidProfile-v1_1_2-28.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Bug fix release </description>
		</release>
		<release date="2022-08-17" version="1.1.3.4" md5="88708b5c464c94ef185df61c310b5f1a">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-4/orcidProfile-v1_1_3-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>API Error  capturing - Bugfix</description>
		</release>
		<release date="2023-02-17" version="1.3.4.1" md5="4efe6c06322a15852186bafab5aac037">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_3_4-1/orcidProfile-v1_3_4-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description locale="en_US"><![CDATA[<p><ul> <li><h4>Additions</h4></li> <ol> <li>Improved display of the official orcid symbol on the article landing page</li> <li>Better handling of garbled titles in articles/prints</li> <li>Display of the orcid symbol on the article landing page only for authenticated authors </li> </ol> <li><h4>Changes</h4></li> <ol> <li>Co-Author for UI is changed</li> <li><b style="color:#d00a0a">Important: </b>For co authors, the  readonly field includes an additional <b>override</b > button, which will be removed </li> <li><b style="color:#d00a0a">Important: </b>Only for co-authors: after validation the orcidButton is not available, which will be implemented soon</li> </ol> </ul></p>]]></description>
		</release>
		<release date="2023-03-19" version="1.1.3.5" md5="a87a45e63156fee6cae14ff17d3b4ee4">
			<package>https://github.com/withanage/orcidProfile/releases/download/v1_1_3-5/orcidProfile-v1_1_3-5.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description locale="en_US"><![CDATA[ <ul> <li> <h4>Additions</h4> </li> <ol> <li>Pre-publication check : detect unauthenticatedORCiDs</li> <li>Pre-publication check : detect duplicate authors</li> <li>Display orcid Icon for only authenticated users</li> <li>orcid Title includes prefix</li> </ol> <li> <h4>Changes</h4> </li> <ol> <li>Update the orcid about page with newset changes</li> <li>Disable thank reviewer for Public-API to avodi errors</li> </ol> </ul> ]]></description>
		</release>
		<release date="2023-03-27" version="1.1.3.6" md5="e4eaa00c41b90bf7512e97f7d0721102">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-6/orcidProfile-v1_1_3-6.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description locale="en_US"><![CDATA[ <ul> <li> <h4>Additions</h4> </li> <ol><li>Send DOI URL to orcid , if available</li><li>Pre-publication check : detect unauthenticatedORCiDs</li> <li>Pre-publication check : detect duplicate authors</li> <li>Display orcid Icon for only authenticated users</li> <li>orcid Title includes prefix</li> </ol> <li> <h4>Changes</h4> </li> <ol> <li>Update the orcid about page with newset changes</li> <li>Disable thank reviewer for Public-API to avodi errors</li> </ol> </ul> ]]></description>
		</release>
		<release date="2023-04-16" version="1.1.3.7" md5="821441e9d19a4394ec0c09fdb57344c9">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-7/orcidProfile-v1_1_3-7.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description locale="en_US"><![CDATA[ <ul> <li> <h4>Additions</h4> </li> <ol><li>Send DOI URL to orcid , if available</li><li>Pre-publication check : detect unauthenticatedORCiDs form Member-API</li> <li>Pre-publication check : detect duplicate authors</li> <li>Display orcid Icon for only authenticated users</li> <li>orcid Title includes prefix</li> </ol> <li> <h4>Changes</h4> </li> <ol> <li>Update the orcid about page with newset changes</li> <li>Disable thank reviewer for Public-API to avodi errors</li> </ol> </ul> ]]></description>
		</release>
		<release date="2023-07-08" version="1.1.3.8" md5="7b3716f1149f099b331e8e5ceaca24cc">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-8/orcidProfile-v1_1_3-8.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Removed orcidProfile plugin based login</description>
		</release>
		<release date="2023-07-30" version="1.1.3.9" md5="e749831ac7191d54353ceb6e44da311c">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_1_3-9/orcidProfile-v1_1_3-9.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Security Enhancement: Remove orcid tokens information from the api information</description>
		</release>
		<release date="2023-08-24" version="1.1.4.3" md5="32bf2228e83262566f03076cf546dc9b">
			<package>https://github.com/pkp/orcidProfile/releases/download/v1_3_4-4/orcidProfile-v1_3_4-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Fix enable/disable behaviour</description>
		</release>

	</plugin>


	<plugin category="generic" product="defaultTranslation">
		<name locale="en">Default Translation</name>
		<name locale="en_US">Default Translation</name>
		<homepage>https://github.com/pkp/defaultTranslation</homepage>
		<summary locale="en">Make OJS fall back on English when elements of the software translation are missing.</summary>
		<summary locale="en_US">Make OJS fall back on English when elements of the software translation are missing.</summary>
		<description locale="en"><![CDATA[<p>This plugin, when enabled, will cause OJS to fall back on the English language translations for elements of the software that haven\'t been translated into the user\'s language.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin, when enabled, will cause OJS to fall back on the English language translations for elements of the software that haven\'t been translated into the user\'s language.</p>]]></description>
		<maintainer>
			<name>Alec Smecher</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2018-02-21" version="1.0.0.0" md5="f5f22549f96470cc3cec6d00f53d8569">
			<package>https://github.com/pkp/defaultTranslation/releases/download/ojs-3_1_0-1/defaultTranslation-ojs-3_1_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release for OJS 3.x.</description>
		</release>
		<release date="2020-02-27" version="1.1.1.0" md5="2dac7953616271ba7cd8161d8b46b796">
			<package>https://github.com/pkp/defaultTranslation/releases/download/v1.1.1-0/defaultTranslation-v1.1.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release for OJS/OMP/OPS 3.2.</description>
		</release>
		<release date="2020-06-19" version="1.1.1.1" md5="5a8b158ef62838d13c7c69c8222370c1">
			<package>https://github.com/pkp/defaultTranslation/releases/download/v1_1_1-1/defaultTranslation-v1_1_1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS/OMP/OPS 3.2.1 / 3.3.0.</description>
		</release>
		<release date="2023-04-14" version="1.2.0.0" md5="c09305c74087a341f74911898294094a">
			<package>https://github.com/pkp/defaultTranslation/releases/download/v1_2_0-0/defaultTranslation-v1_2_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Compatibility release for OJS/OMP/OPS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="paperbuzz">
		<name locale="en">Paperbuzz</name>
		<name locale="en_US">Paperbuzz</name>
		<homepage>https://github.com/pkp/paperbuzz</homepage>
		<summary locale="en">Display free altmetrics based on open data from Paperbuzz.</summary>
		<summary locale="en_US">Display free altmetrics based on open data from Paperbuzz.</summary>
		<description locale="en"><![CDATA[<p>This plugin will display free altmetrics based on open data from <a href="http://paperbuzz.org">Paperbuzz</a>, a free and open service built by Impactstory that itself relies on <a href="https://www.crossref.org/services/event-data/">Crossref Event Data</a>. To use this plugin, your journal must have DOIs assigned to articles and properly deposited with Crossref.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin will display free altmetrics based on open data from <a href="http://paperbuzz.org">Paperbuzz</a>, a free and open service built by Impactstory that itself relies on <a href="https://www.crossref.org/services/event-data/">Crossref Event Data</a>. To use this plugin, your journal must have DOIs assigned to articles and properly deposited with Crossref.</p>]]></description>
		<maintainer>
			<name>Bozana Bokan</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2019-04-19" version="1.0.0.0" md5="56fc123731bf8b5593e92f9904e60a6d">
			<package>https://github.com/pkp/paperbuzz/releases/download/1.0.0.0/paperbuzz-1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release.</description>
		</release>
		<release date="2020-06-19" version="1.0.2.0" md5="59f8279e3ce520579282f998d8ed0aaa">
			<package>https://github.com/pkp/paperbuzz/releases/download/v1_0_2-0/paperbuzz-v1_0_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for 3.2.1.</description>
		</release>
		<release date="2021-02-02" version="1.0.3.0" md5="085fe0fc182453574ecc1a71bebb396e">
			<package>https://github.com/pkp/paperbuzz/releases/download/v1_0_3-0/paperbuzz-v1_0_3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for 3.3.0.</description>
		</release>
		<release date="2021-04-12" version="1.0.3.1" md5="e979ad4fb7aa2806abd320cfea3ccf44">
			<package>https://github.com/pkp/paperbuzz/releases/download/v1_0_3-1/paperbuzz-v1_0_3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS/OPS 3.3.0.</description>
		</release>
		<release date="2023-07-17" version="2.0.0.0" md5="a026dbd79faa6215b12db204c5e72b85">
			<package>https://github.com/pkp/paperbuzz/releases/download/v2_0_0-0/paperbuzz-v2_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS/OPS 3.4</description>
		</release>
	</plugin>
	<plugin category="generic" product="openAIRE">
		<name locale="en">OpenAIRE Plugin 2.0</name>
		<name locale="en_US">OpenAIRE Plugin 2.0</name>
		<homepage>https://github.com/ojsde/openAIRE</homepage>
		<summary locale="en">This plugin adds a new OAI-PMH metadata format to Open Journal Systems that complements the OpenAIRE Guidelines for Literature Repository Managers v4.</summary>
		<summary locale="en_US">This plugin adds a new OAI-PMH metadata format to Open Journal Systems that complements the OpenAIRE Guidelines for Literature Repository Managers v4.</summary>
		<description locale="en"><![CDATA[<p>For detailed instructions, see plugin Readme file https://github.com/ojsde/openAIRE/blob/master/readme.md.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>For detailed instructions, see plugin Readme file https://github.com/ojsde/openAIRE/blob/master/readme.md.</p>]]></description>
		<maintainer>
			<name>Antti-Jussi Nygård</name>
			<institution>OJS-de.net</institution>
			<email>ajnyga@gmail.com</email>
		</maintainer>
		<release date="2019-04-17" version="2.0.0.4" md5="4d657e0abb8d4cde869f521d9eee6bcb">
			<package>https://github.com/ojsde/openAIRE/releases/download/2.0.0.4/openAIRE.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OpenAIRE 2.0 plugin for OJS 3.1.1</description>
		</release>
		<release date="2019-05-20" version="2.0.0.5" md5="b56d6aa1d595faf30b4139c0b9acb488">
			<package>https://github.com/ojsde/openAIRE/releases/download/2.0.0.5/openAIRE.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OpenAIRE 2.0 plugin for OJS 3.1.1</description>
		</release>
		<release date="2019-04-17" version="2.0.1.4" md5="2915583358228d8595f28648bd282e16">
			<package>https://github.com/ojsde/openAIRE/releases/download/2.0.1.4/openAIRE.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OpenAIRE 2.0 plugin for OJS 3.1.2</description>
		</release>
		<release date="2019-05-20" version="2.0.1.5" md5="9c748bdc32a664df696da9b5daa2e886">
			<package>https://github.com/ojsde/openAIRE/releases/download/2.0.1.5/openAIRE.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>OpenAIRE 2.0 plugin for OJS 3.1.2</description>
		</release>
		<release date="2020-02-27" version="2.0.2.0" md5="e96c552aefb633aea32a181c3bd29eac">
			<package>https://github.com/ojsde/openAIRE/releases/download/2.0.2.0/openAIRE.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Update for compatibility with v3.2.</description>
		</release>
		<release date="2021-02-08" version="2.0.3.0" md5="867cd01872b3e6eb225d49ab6ef73151">
			<package>https://github.com/ojsde/openAIRE/releases/download/2.0.3.0/openAIRE.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Update for compatibility with v3.3.</description>
		</release>
	</plugin>
	<plugin category="generic" product="lensGalleyBits">
		<name locale="en">Lens Viewer for Monographs and Journal Articles</name>
		<name locale="en_US">Lens Viewer for Monographs and Journal Articles</name>
		<homepage>https://github.com/withanage/lensGalleyBits</homepage>
		<summary locale="en">An extended version of the Lens Viewer that supports books and articles.</summary>
		<summary locale="en_US">An extended version of the Lens Viewer that supports books and articles.</summary>
		<description locale="en"><![CDATA[<p>This plugin provides an extended version of the Lens Viewer with support for books with BITS extensions. It also supports articles.</p><p>Do not use this plugin alongside the official Lens Viewer plugin. Only use one or the other, depending on your needs.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin provides an extended version of the Lens Viewer with support for books with BITS extensions. It also supports articles.</p><p>Do not use this plugin alongside the official Lens Viewer plugin. Only use one or the other, depending on your needs.</p>]]></description>
		<maintainer>
			<name>Dulip Withanage</name>
			<institution>University of Heidelberg</institution>
			<email>dulip.withanage@gmail.com</email>
		</maintainer>
		<release date="2019-05-18" version="3.0.0.0" md5="13bc221debcc959db042a969a543eab0">
			<package>https://github.com/withanage/lensGalleyBits/releases/download/V3.0.0.0/lensGalleyBits-V3.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner"/>
			<description>Initial release.</description>
		</release>
		<release date="2019-06-04" version="4.0.0.0" md5="83ad5f946ea1cf5c4952cdc1b3e503de">
			<package>https://github.com/withanage/lensGalleyBits/releases/download/V4.0.0.0/lensGalleyBits-V4.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner"/>
			<description>OJS 3.1.2 : Image support</description>
		</release>
		<release date="2020-06-04" version="4.0.0.1" md5="c0c89934a68ae75fc76381886ba00e0b">
			<package>https://github.com/withanage/lensGalleyBits/releases/download/V4.0.0.1/lensGalleyBits-V4.0.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="partner"/>
			<description>OJS 3.2 : Image support</description>
		</release>
		<release date="2021-02-05" version="4.0.0.2" md5="ec0e08f14a976d50995a1925160eeacc">
			<package>https://github.com/withanage/lensGalleyBits/releases/download/v4_0_0-2/lensGalleyBits-v4_0_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner"/>
			<description>Update article fetch for 3.2 compatibility</description>
		</release>
	</plugin>
	<plugin category="generic" product="reviewerCredits">
		<name locale="en">ReviewerCredits Plugin</name>
		<name locale="en_US">ReviewerCredits Plugin</name>
		<homepage>https://gitlab.com/reviewercredits/reviewercredits-ojs-plugin</homepage>
		<summary locale="en">This plugin enable the integration with ReviewerCredits (www.reviewercredits.com).</summary>
		<summary locale="en_US">This plugin enable the integration with ReviewerCredits (www.reviewercredits.com).</summary>
		<description locale="en"><![CDATA[This plugin enable the integration with ReviewerCredits using REST APIs. The main goal is to create and approve Peer Review Claims on the ReviewerCredits website.]]></description>
		<description locale="en_US"><![CDATA[This plugin enable the integration with ReviewerCredits using REST APIs. The main goal is to create and approve Peer Review Claims on the ReviewerCredits website.]]></description>
		<maintainer>
			<name>Matteo Mondini</name>
			<institution>ReviewerCredits</institution>
			<email>matteo.mondini@gmail.com</email>
		</maintainer>
		<release date="2021-10-13" version="2.1.2.0" md5="720a9707cabc04cf1ce2a8118bbc04c8">
			<package>https://www.reviewercredits.com/wp-content/uploads/2021/10/reviewerCredits.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
			</compatibility>
			<certification type="partner"/>
			<description>Plugin to enable the integration with ReviewerCredits.</description>
		</release>
		<release date="2020-05-28" version="1.0.6.0" md5="10f24f3906b3c3cb2e568bd5688c3355">
			<package>https://www.reviewercredits.com/wp-content/uploads/2021/05/reviewerCredits.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.4</version>
				<version>3.2.1.0</version>
				<version>3.1.2.4</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
			</compatibility>
			<certification type="partner"/>
			<description>Plugin to enable the integration with ReviewerCredits.</description>
		</release>
		<release date="2020-10-14" version="1.0.0.1" md5="c011f3d86c0cefafd011b6427cdc3d5f">
			<package>https://www.reviewercredits.com/wp-content/uploads/2020/10/reviewerCredits.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.1.2.4</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
			</compatibility>
			<certification type="partner"/>
			<description>Plugin to enable the integration with ReviewerCredits.</description>
		</release>
	</plugin>
	<plugin category="generic" product="emailIssueToc">
		<name locale="en">Email Issue Table of Contents</name>
		<name locale="en_US">Email Issue Table of Contents</name>
		<homepage>https://github.com/ulsdevteam/pkp-emailIssueToc</homepage>
		<summary locale="en">This plugin embeds the table of contents within the default notification email sent when publishing an issue.</summary>
		<summary locale="en_US">This plugin embeds the table of contents within the default notification email sent when publishing an issue.</summary>
		<description locale="en">This plugin embeds the table of contents within the default notification email sent when publishing an issue.</description>
		<description locale="en_US">This plugin embeds the table of contents within the default notification email sent when publishing an issue.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2022-04-29" version="1.1.0.1" md5="24f17491fad5ef933adfa677d22780cd">
			<package>https://github.com/ulsdevteam/pkp-emailIssueToc/releases/download/v1.1.0-1/emailIssueToc-1.1.0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the emailIssueToc plugin for OJS 3.3.</description>
		</release>
		<release date="2022-04-29" version="1.0.2.2" md5="4456324a6deb504831e11c328bd49fa3">
			<package>https://github.com/ulsdevteam/pkp-emailIssueToc/releases/download/v1.0.2-2/emailIssueToc-1.0.2-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the emailIssueToc plugin for OJS 3.2+.</description>
		</release>
		<release date="2022-01-04" version="1.0.2.1" md5="be0c232acab4777cab1e89976473ccb8">
			<package>https://github.com/ulsdevteam/pkp-emailIssueToc/releases/download/v1.0.2-1/emailIssueToc-1.0.2.1.tgz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the emailIssueToc plugin for OJS 3.2, with English, German, and Italian locales.</description>
		</release>
		<release date="2020-06-29" version="1.0.1.0" md5="e8e758d90c484fedff207e24152adf2c">
			<package>https://github.com/ulsdevteam/pkp-emailIssueToc/releases/download/v1.0.1-0/emailIssueToc-1.0.1.0.tgz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the emailIssueToc plugin for OJS 3.2.</description>
		</release>
		<release date="2020-06-29" version="1.0.0.0" md5="789e6f18c743359bc548c5455efebd5f">
			<package>https://github.com/ulsdevteam/pkp-emailIssueToc/releases/download/v1.0.0-0/emailIssueToc-1.0.0.0.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the emailIssueToc plugin for OJS 3.1.</description>
		</release>
	</plugin>
	<plugin category="generic" product="editorialBio">
		<name locale="en">EditorialBio plugin</name>
		<name locale="en_US">EditorialBio plugin</name>
		<homepage>https://github.com/ulsdevteam/pkp-editorialBio</homepage>
		<summary locale="en">This plugin exposes the editorial biographies as pages, as used to be the case with OJS 2.x.</summary>
		<summary locale="en_US">This plugin exposes the editorial biographies as pages, as used to be the case with OJS 2.x.</summary>
		<description locale="en">The endpoint {journal_path}/about/editorialTeamBio/{user_id} will respond to display a public editorial bio page, if data is entered in the biography for an editor or journal manager.</description>
		<description locale="en_US">The endpoint {journal_path}/about/editorialTeamBio/{user_id} will respond to display a public editorial bio page, if data is entered in the biography for an editor or journal manager.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2021-07-26" version="1.0.0.1" md5="a3ee5f5430db108b4bf454ddaed38e7e">
			<package>https://github.com/ulsdevteam/pkp-editorialBio/releases/download/v1.0.0-1/editorialBio-1.0.0-1.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Editorial Bio plugin for OJS 3.1/3.2.</description>
		</release>
		<release date="2022-04-29" version="1.0.0.2" md5="8a11236c905d90a4675c948c04fc3af4">
			<package>https://github.com/ulsdevteam/pkp-editorialBio/releases/download/v1.0.0-2/editorialBio-1.0.0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Editorial Bio plugin for OJS 3.3</description>
		</release>
	</plugin>
	<plugin category="generic" product="clamav">
		<name locale="en">Clam Antivirus plugin</name>
		<name locale="en_US">Clam Antivirus plugin</name>
		<homepage>https://github.com/ulsdevteam/pkp-clamav</homepage>
		<summary locale="en">This plugin scans submission files using Clam Antivirus, blocking files with a known virus signature.</summary>
		<summary locale="en_US">This plugin scans submission files using Clam Antivirus, blocking files with a known virus signature.</summary>
		<description locale="en">When uploading a submission file through the Author Submission Steps, or via the Editorial interface, or via the Review process, the submission file will be scanned. If a virus is detected, the upload will be canceled and warning notification will be displayed.</description>
		<description locale="en_US">When uploading a submission file through the Author Submission Steps, or via the Editorial interface, or via the Review process, the submission file will be scanned. If a virus is detected, the upload will be canceled and warning notification will be displayed.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2021-07-22" version="3.0.0.0" md5="0c5b6c3484503615a7cbb440d88f6ea8">
			<package>https://github.com/ulsdevteam/pkp-clamav/releases/download/v3.0.0.0/clamav-3.0.0-0.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the ClamAV plugin for OJS 3.1/3.2.</description>
		</release>
		<release date="2022-05-06" version="4.0.0.0" md5="ebf8f40335654444abe057912d49bff5">
			<package>https://github.com/ulsdevteam/pkp-clamav/releases/download/v4.0.0-0/clamav-4.0.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the ClamAV plugin for OJS/OMP/OPS 3.3</description>
		</release>
		<release date="2022-09-01" version="4.0.0.1" md5="def1fa6f7ca2d5872be3140b1653dd17">
			<package>https://github.com/ulsdevteam/pkp-clamav/releases/download/v4.0.0-1/clamav-4.0.0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>ClamAV patch</description>
		</release>
		<release date="2022-10-12" version="4.0.0.2" md5="299316e0a868958d80aa9f955ffdebcc">
			<package>https://github.com/ulsdevteam/pkp-clamav/releases/download/v4.0.0-2/clamav-4.0.0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the ClamAV plugin for OJS/OMP/OPS 3.3</description>
		</release>
	</plugin>
	<plugin category="generic" product="plumAnalytics">
		<name locale="en">Plum Analytics Artifact Widget</name>
		<name locale="en_US">Plum Analytics Artifact Widget</name>
		<homepage>https://github.com/ulsdevteam/ojs-plum-plugin</homepage>
		<summary locale="en">This plugin integrates Plum Analytics\' Artifact Widget.</summary>
		<summary locale="en_US">This plugin integrates Plum Analytics\' Artifact Widget.</summary>
		<description locale="en">This plugin provides display of PlumX Metrics from Plum Analytics on the article level for PKP Open Journal Systems.</description>
		<description locale="en_US">This plugin provides display of PlumX Metrics from Plum Analytics on the article level for PKP Open Journal Systems.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2019-04-22" version="1.3.0.0" md5="05030eac0d4b7daa14b26febbf4b5571">
			<package>https://github.com/ulsdevteam/ojs-plum-plugin/releases/download/v1.3.0-0/plumAnalytics-1.3.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Plum Analytics plugin for OJS 3.1.1/3.1.2.</description>
		</release>
		<release date="2020-07-03" version="1.3.0.1" md5="ba720f0e04a79c7e379623a506e0454d">
			<package>https://github.com/ulsdevteam/ojs-plum-plugin/releases/download/v1.3.0-1/plumAnalytics-1.3.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Plum Analytics plugin for OJS 3.1/3.2.</description>
		</release>
		<release date="2021-04-30" version="1.3.0.2" md5="a8b515824ee72667b4232b90774b1b61">
			<package>https://github.com/ulsdevteam/ojs-plum-plugin/releases/download/v1.3.0-2/plumAnalytics-1.3.0-2.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Legacy release of the Plum Analytics plugin for OJS 3.1.</description>
		</release>
		<release date="2021-05-03" version="1.4.0.0" md5="1fed8dabfd5eeb1a0a6606acfb19a963">
			<package>https://github.com/ulsdevteam/ojs-plum-plugin/releases/download/v1.4.0-0/plumAnalytics-1.4.0-0.tgz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Plum Analytics plugin for OJS 3.2+.</description>
		</release>
	</plugin>
	<plugin category="generic" product="sushiLite">
		<name locale="en">SUSHI-Lite</name>
		<name locale="en_US">SUSHI-Lite</name>
		<homepage>https://github.com/ulsdevteam/ojs-sushiLite-plugin</homepage>
		<summary locale="en">This plugin adds SUSHI-Lite (draft) support.</summary>
		<summary locale="en_US">This plugin adds SUSHI-Lite (draft) support.</summary>
		<description locale="en">This plugin provides the NISO SUSHI-Lite standard (2015 draft release) for PKP software.</description>
		<description locale="en_US">This plugin provides the NISO SUSHI-Lite standard (2015 draft release) for PKP software.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2019-06-11" version="1.1.1.0" md5="2e88c197b344e9897cd31f49c5cebdb4">
			<package>https://github.com/ulsdevteam/ojs-sushiLite-plugin/releases/download/v1.1.1-0/sushiLite-1.1.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the SUSHI-Lite plugin for OJS 3.1.1/3.1.2.</description>
		</release>
		<release date="2020-11-09" version="1.1.2.0" md5="7f38f28edbcf861e76c6877b4a81fb62">
			<package>https://github.com/ulsdevteam/ojs-sushiLite-plugin/releases/download/v1.1.2-0/sushiLite-1.1.2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the SUSHI-Lite plugin for OJS 3.1/3.2.</description>
		</release>
		<release date="2022-01-25" version="1.1.3.0" md5="0e3d1cadb8fe488442eb11449d09ec93">
			<package>https://github.com/ulsdevteam/ojs-sushiLite-plugin/releases/download/v1.1.3-0/sushiLite-1.1.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the SUSHI-Lite  plugin for OJS 3.3</description>
		</release>

	</plugin>
	<plugin category="generic" product="betterPassword">
		<name locale="en">Better Password</name>
		<name locale="en_US">Better Password</name>
		<homepage>https://github.com/ulsdevteam/pkp-betterPassword</homepage>
		<summary locale="en">This plugin adds user restrictions when selecting passwords.</summary>
		<summary locale="en_US">This plugin adds user restrictions when selecting passwords.</summary>
		<description locale="en">This plugin provides additional password restriction options when users are selecting their own password.  Please review the NIST recommendations in the README before using arbitrary password complexity requirements.</description>
		<description locale="en_US">This plugin provides additional password restriction options when users are selecting their own password.  Please review the NIST recommendations in the README before using arbitrary password complexity requirements.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2019-07-17" version="1.0.0.1" md5="6a3948996c8e354c0d5257843c097eb5">
			<package>https://github.com/ulsdevteam/pkp-betterPassword/releases/download/v1.0.0-1/betterPassword-1.0.0-1.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Better Password plugin for OJS/OMP 3.1.2.</description>
		</release>
		<release date="2021-08-18" version="1.1.0.2" md5="a189bea0dcde7b49aba970bcc958e1c4">
			<package>https://github.com/ulsdevteam/pkp-betterPassword/releases/download/v1.1.0-2/betterPassword-v1.1.0-2.tgz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Better Password plugin for OJS/OMP 3.2.1.</description>
		</release>
		<release date="2021-11-29" version="1.2.0.0" md5="b198dff67a8baab666e6baf181942d31">
			<package>https://github.com/ulsdevteam/pkp-betterPassword/releases/download/v1.2.0-0/betterPassword-v1.2.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Better Password plugin for OJS/OMP/OPS 3.3</description>
		</release>
		<release date="2022-10-28" version="1.2.0.1" md5="5cc8bd84ad8f42d3734695c556e9f441">
			<package>https://github.com/ulsdevteam/pkp-betterPassword/releases/download/v1.2.0-1/betterPassword-v1.2.0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Better Password plugin for OJS/OMP/OPS 3.3</description>
		</release>
	</plugin>
	<plugin category="generic" product="sitesearch">
		<name locale="en">Sitesearch</name>
		<name locale="en_US">Sitesearch</name>
		<homepage>https://github.com/ulsdevteam/pkp-sitesearch</homepage>
		<summary locale="en">This plugin forces public searches for a context to be re-scoped to the site.</summary>
		<summary locale="en_US">This plugin forces public searches for a context to be re-scoped to the site.</summary>
		<description locale="en">This plugin rewrites the search for a context to the site level. This is used, for example, in the case where one journal has assumed the operations of one or more other journals (which are installed in the same site).</description>
		<description locale="en_US">This plugin rewrites the search for a context to the site level. This is used, for example, in the case where one journal has assumed the operations of one or more other journals (which are installed in the same site).</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2020-02-17" version="1.0.0.0" md5="5ceb1912c3faf36c5b13d3da45793eaa">
			<package>https://github.com/ulsdevteam/pkp-sitesearch/releases/download/v1.0.0-0/sitesearch-1.0.0-0.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Sitesearch plugin for OJS/OMP 3.1 / 3.2 and OPS 3.2.</description>
		</release>
		<release date="2022-02-22" version="1.1.0.0" md5="ba409d131085ece31e2dd5404a34e3bf">
			<package>https://github.com/ulsdevteam/pkp-sitesearch/releases/download/v1.1.0-0/sitesearch-1.1.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Sitesearch plugin for OJS/OMP/OPS 3.3</description>
		</release>
	</plugin>
	<plugin category="generic" product="akismet">
		<name locale="en">Akismet</name>
		<name locale="en_US">Akismet</name>
		<homepage>https://github.com/ulsdevteam/pkp-akismet</homepage>
		<summary locale="en">This plugin integrates the Akismet anti-spam service.</summary>
		<summary locale="en_US">This plugin integrates the Akismet anti-spam service.</summary>
		<description locale="en">This plugin verifies new user registrations via the Akismet anti-spam service. Subscription to Akismet is required.</description>
		<description locale="en_US">This plugin verifies new user registrations via the Akismet anti-spam service. Subscription to Akismet is required.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2019-07-01" version="1.2.2.1" md5="ef28bdfbba8c19458f2b3148303e6b42">
			<package>https://github.com/ulsdevteam/pkp-akismet/releases/download/v1.2.2-1/akismet-1.2.2-1.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Akismet plugin for OJS 3.1.1 and OJS/OMP 3.1.2.</description>
		</release>
		<release date="2021-07-23" version="1.2.2.2" md5="57a0f93820f53de15d7e1db329518602">
			<package>https://github.com/ulsdevteam/pkp-akismet/releases/download/v1.2.2-2/akismet-1.2.2-2.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Akismet plugin for OJS/OMP 3.1 / 3.2 and OPS 3.2.</description>
		</release>
		<release date="2022-02-11" version="1.2.3.0" md5="849d1a27bc16cc418579cecc15eea4ba">
			<package>https://github.com/ulsdevteam/pkp-akismet/releases/download/v1.2.3-0/akismet-1.2.3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Akismet plugin for OJS/OMP/OPS 3.3</description>
		</release>
	</plugin>
	<plugin category="generic" product="formHoneypot">
		<name locale="en">Form Honeypot</name>
		<name locale="en_US">Form Honeypot</name>
		<homepage>https://github.com/ulsdevteam/pkp-formHoneypot</homepage>
		<summary locale="en">This plugin adds a honeypot to user registration.</summary>
		<summary locale="en_US">This plugin adds a honeypot to user registration.</summary>
		<description locale="en">This plugin verifies new user registrations by creating a honeypot on the User Registration form.</description>
		<description locale="en_US">This plugin verifies new user registrations by creating a honeypot on the User Registration form.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2019-07-03" version="1.3.0.1" md5="70bd9f60dcac9614ba9bba0bace71369">
			<package>https://github.com/ulsdevteam/pkp-formHoneypot/releases/download/v1.3.0-1/formHoneypot-1.3.0-1.tgz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Form Honeypot plugin for OJS 3.1.1/3.1.2.</description>
		</release>
		<release date="2020-04-15" version="1.4.0.0" md5="bf92c16089f0b8c8bc07e4da49a22315">
			<package>https://github.com/ulsdevteam/pkp-formHoneypot/releases/download/v1.4.0-0/formHoneypot-1.4.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Form Honeypot plugin for OJS 3.2+.</description>
		</release>
		<release date="2021-12-08" version="1.4.0.1" md5="05834f060d753a2779fcd914607a608f">
			<package>https://github.com/ulsdevteam/pkp-formHoneypot/releases/download/v1.4.0-1/formHoneypot-1.4.0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the Form Honeypot plugin for OJS 3.2+.</description>
		</release>
	</plugin>
	<plugin category="generic" product="authorRequirements">
		<name locale="en">Author Requirements</name>
		<name locale="en_US">Author Requirements</name>
		<homepage>https://github.com/ewhanson/authorRequirements</homepage>
		<summary locale="en">Make certain author fields optional.</summary>
		<summary locale="en_US">Make certain author fields optional.</summary>
		<description locale="en">This plugin makes it possible to add an author to a list of contributors without using certain required fields (e.g. email). This is useful in cases where required information does not exist for authors.</description>
		<description locale="en_US">This plugin makes it possible to add an author to a list of contributors without using certain required fields (e.g. email). This is useful in cases where required information does not exist for authors.</description>
		<maintainer>
			<name>Erik Hanson</name>
			<institution>Public Knowledge Project</institution>
			<email>hansonew@gmail.com</email>
		</maintainer>
		<release date="2019-10-27" version="1.0.0.0" md5="0303e950caf99d2c4a9d11529ddb18db">
			<package>https://github.com/ewhanson/authorRequirements/releases/download/v1.0.0-0/authorRequirements-1.0.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner"/>
			<description>Initial release of the authorRequirements plugin for OJS/OMP 3.1.x</description>
		</release>
		<release date="2020-02-26" version="1.0.0.1" md5="b4678522339100227e2a2770f7041e08">
			<package>https://github.com/ewhanson/authorRequirements/releases/download/v1.0.0-1/authorRequirements-1.0.0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="partner"/>
			<description>Release of the authorRequirements plugin for OJS/OMP 3.2.0</description>
		</release>
		<release date="2021-02-02" version="1.0.1.0" md5="42a1097da965784028ea5849ab1a1362">
			<package>https://github.com/ewhanson/authorRequirements/releases/download/v1.0.1-0/authorRequirements-1.0.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/>
			<description>Release of the authorRequirements plugin for OJS/OMP 3.3.0</description>
		</release>
		<release date="2021-08-16" version="1.0.1.1" md5="910e86d153ff882355be2c2bce08f3b0">
			<package>https://github.com/ewhanson/authorRequirements/releases/download/v1.0.1-1/authorRequirements-1.0.1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/>
			<description>Update to authorRequirements plugin fixing compatability issues in OMP 3.3</description>
		</release>
		<release date="2021-09-27" version="1.0.1.2" md5="24ff4f6ad97f6efd89bacc6375fd87dd">
			<package>https://github.com/ewhanson/authorRequirements/releases/download/v1.0.1-2/authorRequirements-1.0.1-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/>
			<description>Updated for cross-application compatibility.</description>
		</release>
		<release date="2023-05-17" version="1.0.2.1" md5="d53d5d2b12a04526d1ec4cbf095b81aa">
			<package>https://github.com/pkp/authorRequirements/releases/download/v1.0.2-1/authorRequirements-v1.0.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Updated for OJS/OMP 3.3 compatibility and PHP 8.0 support</description>
		</release>
		<release date="2023-05-17" version="2.0.0.0" md5="56a6825b9b6e359901e146af67a4d9ce">
			<package>https://github.com/pkp/authorRequirements/releases/download/v2.0.0-0/authorRequirements-v2.0.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Updated for OJS/OMP 3.4 compatibility</description>
		</release>
	</plugin>
	<plugin category="generic" product="registrationNotification">
		<name locale="en">Registration Notification</name>
		<name locale="en_US">Registration Notification</name>
		<homepage>https://github.com/pkp/registrationNotification</homepage>
		<summary locale="en">Sends an email notification to a configurable list of emails whenever a new user is registered.</summary>
		<summary locale="en_US">Sends an email notification to a configurable list of emails whenever a new user is registered.</summary>
		<description locale="en"><![CDATA[
		<description locale="en_US"><![CDATA[
			<p>Once enabled, the plugin will send an email notification to a configurable list of emails, configurable per journal/press, whenever a new user is registered. The plugin also supports setting up the email template using variables.</p>
			<p>See <a href="https://github.com/pkp/registrationNotification/blob/master/README.md" target="_blank">https://github.com/pkp/registrationNotification/blob/master/README.md</a> for details.</p>
		]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2019-11-27" version="1.0.0.2" md5="2d60666f208d84ae135ea7da3077eff4">
			<package>https://github.com/pkp/registrationNotification/releases/download/v1.0.0.2/registrationNotification-v1.0.0.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="official" />
			<description>Registration Notification Plugin v1.0.0.2 (Compatible with OJS/OMP 3.1.1).</description>
		</release>
		<release date="2019-11-27" version="2.0.0.1" md5="9dda3ba5c62f9ed980e528067b645be4">
			<package>https://github.com/pkp/registrationNotification/releases/download/v2.0.0.1/registrationNotification-v2.0.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Registration Notification Plugin v2.0.0.1 (Compatible with OJS/OMP 3.1.2).</description>
		</release>
	</plugin>
	<plugin category="generic" product="controlPublicFiles">
		<name locale="en">Control Public Files</name>
		<name locale="en_US">Control Public Files</name>
		<homepage>https://github.com/pkp/controlPublicFiles</homepage>
		<summary locale="en">Limit who can upload public files and what kind of files they can upload.</summary>
		<summary locale="en_US">Limit who can upload public files and what kind of files they can upload.</summary>
		<description locale="en"><![CDATA[
		<description locale="en_US"><![CDATA[
			<p>Users can upload images wherever they are presented with a rich text editor that includes the image upload control. This includes places like the About the Journal section as well as the user biography in every user\'s profile area.</p>
			<p>This plugin provides settings to restrict who can upload, what kind of files they can upload, and how large their directory of files can grow.</p>
		]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-02-27" version="1.0.0.0" md5="d2eca325e7ac7c28e391ed5c4621e061">
			<package>https://github.com/pkp/controlPublicFiles/releases/download/1.0.0.0/controlPublicFiles-1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release for OJS/OMP v3.2.</description>
		</release>
		<release date="2020-02-27" version="1.0.0.1" md5="73a55c80710b32ed9affda08cadbd870">
			<package>https://github.com/pkp/controlPublicFiles/releases/download/v1_0_0-1/controlPublicFIles-v1_0_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release for OJS/OMP v3.2.1.</description>
		</release>
		<release date="2021-02-02" version="1.0.0.2" md5="e5373cc9db58677ab0a86f48aaf20cad">
			<package>https://github.com/pkp/controlPublicFiles/releases/download/v1_0_0-2/controlPublicFiles-v1_0_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This update adds translations for Finnish, Norwegian, Czech, Greek, and Vietnamese.</description>
		</release>
		<release date="2022-08-04" version="1.0.0.3" md5="535449b1a2ee9b3b19306125f74e3dd7">
			<package>https://github.com/pkp/controlPublicFiles/releases/download/v1_0_0-3/controlPublicFIles-v1_0_0-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This is a bugfix release for compatibility with recent PHP releases.</description>
		</release>
		<release date="2023-04-14" version="1.0.1.0" md5="0795e44ce371e744bab36e69cc0a15b7">
			<package>https://github.com/pkp/controlPublicFiles/releases/download/v1_0_1-0/controlPublicFIles-v1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>This is a compatibility release for OJS/OMP/OPS 3.4.0.</description>
		</release>
	</plugin>
	<plugin category="generic" product="textEditorExtras">
		<name locale="en">Text Editor Extras</name>
		<name locale="en_US">Text Editor Extras</name>
		<homepage>https://github.com/pkp/textEditorExtras</homepage>
		<summary locale="en">Add controls to the rich text editor to upload images, manipulate the HTML code, and add tables.</summary>
		<summary locale="en_US">Add controls to the rich text editor to upload images, manipulate the HTML code, and add tables.</summary>
		<description locale="en"><![CDATA[
		<description locale="en_US"><![CDATA[
			<p>This plugin provides settings to turn on extra controls for the rich text editor and to specify which fields should receive the additional controls.</p>
		]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-02-27" version="1.0.0.0" md5="57398322817c1a0e6d877b6ba7e78650">
			<package>https://github.com/pkp/textEditorExtras/releases/download/1.0.0.0/textEditorExtras-1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>Initial release for OJS/OMP v3.2.</description>
		</release>
		<release date="2020-03-23" version="1.0.0.1" md5="84b56e2563506b32b19a6953f49fea11">
			<package>https://github.com/pkp/textEditorExtras/releases/download/1.0.0.1/textEditorExtras-1.0.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official" />
			<description>This update fixes a bug that prevented image uploads from working in some configurations.</description>
		</release>
		<release date="2020-06-19" version="1.0.0.2" md5="ec388ab49e3812b4a0326b2747d755f7">
			<package>https://github.com/pkp/textEditorExtras/releases/download/v1_0_0-2/textEditorExtras-v1_0_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Maintenance release for OJS/OPS/OMP 3.2.1.</description>
		</release>
		<release date="2020-02-20" version="1.0.0.3" md5="62d6a37544ef53923fc97d7b347f82f4">
			<package>https://github.com/NateWr/textEditorExtras/releases/download/v1_0_0-3/textEditorExtras-v1_0_0-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This update adds translations for Arabic, Spanish and Ukrainian.</description>
		</release>
		<release date="2020-05-24" version="1.0.0.4" md5="b2c47b53c0182891eec1c08327f808cc">
			<package>https://github.com/NateWr/textEditorExtras/releases/download/v1_0_0-4/textEditorExtras-v1_0_0-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>This update adds support for extra text editor options in the announcements form.</description>
		</release>
		<release date="2023-04-11" version="1.0.1.0" md5="82cccfd195c4a09aa804a89f44172128">
			<package>https://github.com/pkp/textEditorExtras/releases/download/v1_0_1-0/textEditorExtras-v1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Compatibility release for OJS/OMP/OPS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="blocks" product="twitterBlock">
		<name locale="en">Twitter Block Plugin</name>
		<name locale="en_US">Twitter Block Plugin</name>
		<homepage>https://github.com/RBoelter/ojs3-twitter-sidebar</homepage>
		<summary locale="en">This plugin adds a block to display a Twitter feed in the sidebar.</summary>
		<summary locale="en_US">This plugin adds a block to display a Twitter feed in the sidebar.</summary>
		<description locale="en"><![CDATA[<p>This plugin makes it easy to include Twitter feeds in a multi-journal instance without the need to create several custom blocks.</p><p>Check the <a href="https://github.com/RBoelter/ojs3-twitter-sidebar">how to use guide</a>.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin makes it easy to include Twitter feeds in a multi-journal instance without the need to create several custom blocks.</p><p>Check the <a href="https://github.com/RBoelter/ojs3-twitter-sidebar">how to use guide</a>.</p>]]></description>
		<maintainer>
			<name>Ronny Bölter</name>
			<institution>Leibniz Institute for Psychology Information</institution>
			<email>rb@leibniz-psychology.org</email>
		</maintainer>
		<release date="2020-02-10" version="1.0.0.0" md5="3b7d807b5229847f8460bc432912c4d6">
			<package>https://github.com/RBoelter/twitterBlock/releases/download/1.0.0.0/twitterBlock-1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Initial release</description>
		</release>
		<release date="2020-08-24" version="1.0.0.1" md5="54a0a65d76b85bc4328f507fd8d49308">
			<package>https://github.com/RBoelter/twitterBlock/releases/download/v1_0_0-1/twitterBlock-v1_0_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Added a message to remind administrators to make an appropriate entry in the cookie policy.</description>
		</release>
		<release date="2020-11-11" version="1.0.0.3" md5="a4f5abe12d3117388c0dc07056315ff9">
			<package>https://github.com/RBoelter/twitterBlock/releases/download/v1_0_0-3/twitterBlock-v1_0_0-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Spanish translation added</description>
		</release>
		<release date="2020-11-11" version="3.2.0.1" md5="7b5c445b7301f66329c5748cd91586fe">
			<package>https://github.com/RBoelter/twitterBlock/releases/download/v3_2_0-1/twitterBlock-v3_2_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Spanish translation added</description>
		</release>
	</plugin>
	<plugin category="blocks" product="announcementsBlock">
		<name locale="en">Announcements Block</name>
		<name locale="en_US">Announcements Block</name>
		<homepage>https://github.com/RBoelter/announcementsBlock</homepage>
		<summary locale="en">This plugin adds a block to display announcements in the sidebar.</summary>
		<summary locale="en_US">This plugin adds a block to display announcements in the sidebar.</summary>
		<description locale="en"><![CDATA[<p>This plugin makes it easy to show the latest announcements in the sidebar. It allows you to specify how many announcements are displayed.</p><p>Check the "how to use" guide on <a href="https://github.com/RBoelter/announcementsBlock">GitHub</a></p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin makes it easy to show the latest announcements in the sidebar. It allows you to specify how many announcements are displayed.</p><p>Check the "how to use" guide on <a href="https://github.com/RBoelter/announcementsBlock">GitHub</a></p>]]></description>
		<maintainer>
			<name>Ronny Bölter</name>
			<institution>Leibniz Institute for Psychology (ZPID), Trier, Germany</institution>
			<email>rb@leibniz-psychology.org</email>
		</maintainer>
		<release date="2020-03-10" version="1.0.0.0" md5="53755e1c4bdc82bcc56884ba7448e4a4">
			<package>https://github.com/RBoelter/announcementsBlock/releases/download/1.0.0.0/announcementsBlock-1.0.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Initial release</description>
		</release>
		<release date="2020-11-13" version="1.0.0.2" md5="eeb08824033b1b51416c8006522357dc">
			<package>https://github.com/RBoelter/announcementsBlock/releases/download/v1_0_0-2/announcementsBlock-v1_0_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Settings for text alignment added</description>
		</release>
		<release date="2020-11-13" version="3.2.0.1" md5="f8ff333b6d35073b083a752aff3c89a1">
			<package>https://github.com/RBoelter/announcementsBlock/releases/download/v3_2_0-1/announcementsBlock-v3_2_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Settings for text alignment added</description>
		</release>
	</plugin>
	<plugin category="gateways" product="swordServer">
		<name locale="en">Sword Server Plugin</name>
		<name locale="en_US">Sword Server Plugin</name>
		<homepage>https://github.com/quoideneuf/swordServer</homepage>
		<summary locale="en">Permits the use of the SWORD protocol to receive deposits from other applications.</summary>
		<summary locale="en_US">Permits the use of the SWORD protocol to receive deposits from other applications.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits the use of the <a href="http://swordapp.org/sword-v2/">SWORDv2 protocol</a> to allow OJS to receive deposit documents from other systems.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits the use of the <a href="http://swordapp.org/sword-v2/">SWORDv2 protocol</a> to allow OJS to receive deposit documents from other systems.</p>]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-03-02" version="0.0.0.1" md5="8724a3de65783c4ae7686723f60a85b3">
			<package>https://github.com/pkp/swordServer/releases/download/v0.0.0.1/swordServer-v0.0.0.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release</description>
		</release>
		<release date="2020-06-19" version="1.0.0.0" md5="18b01d36e842b9e1db4733c2c1af3b4f">
			<package>https://github.com/pkp/swordServer/releases/download/v1_0_0-0/swordServer-v1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Maintenance release for OJS 3.2.1</description>
		</release>
	</plugin>
	<plugin category="gateways" product="pubIdResolver">
		<name locale="en">Public Identifier Resolver</name>
		<name locale="en_US">Public Identifier Resolver</name>
		<homepage>https://github.com/yasielpv/pubIdResolver</homepage>
		<summary locale="en">Allows resolving the URL of an issue, article and galley from your public identifier registered in OJS.</summary>
		<summary locale="en_US">Allows resolving the URL of an issue, article and galley from your public identifier registered in OJS.</summary>
		<description locale="en"><![CDATA[<p>The Public Identifier Resolver plugin resolves individual articles, issues and galleys in the current OJS installation using the supplied public identifier register in OJS. The public identifier can be DOI, URN, ARK, PURL, etc. Also, It can obtain the element metadata using the format ERC adding question marks at the end of the persistent identifier. ERC format includes the metadata who, what, when, where, how and target.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The Public Identifier Resolver plugin resolves individual articles, issues and galleys in the current OJS installation using the supplied public identifier register in OJS. The public identifier can be DOI, URN, ARK, PURL, etc. Also, It can obtain the element metadata using the format ERC adding question marks at the end of the persistent identifier. ERC format includes the metadata who, what, when, where, how and target.</p>]]></description>
		<maintainer>
			<name>Yasiel Perez Vera</name>
			<institution>Universidad La Salle</institution>
			<email>yasielpv@gmail.com</email>
		</maintainer>
		<release date="2021-11-19" version="1.0.2.0" md5="e503d4323e8eca75c0063d3872ff6d62">
			<package>https://github.com/yasielpv/pubIdResolver/releases/download/v1_0_2-0/pubIdResolver-v1_0_2-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Initial release</description>
		</release>
	</plugin>
	<plugin category="generic" product="returningAuthorScreening">
		<name locale="en">Returning Author Screening Plugin</name>
		<name locale="en_US">Returning Author Screening Plugin</name>
		<homepage>https://github.com/pkp/returningAuthorScreening</homepage>
		<summary locale="en">Permits authors who already have at least one published submission to self-publish subsequent submissions.</summary>
		<summary locale="en_US">Permits authors who already have at least one published submission to self-publish subsequent submissions.</summary>
		<description locale="en"><![CDATA[<p>This plugin permits authors who already have at least one published submission to self-publish subsequent submissions.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin permits authors who already have at least one published submission to self-publish subsequent submissions.</p>]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-03-10" version="1.0.0.0" md5="dab150291c53b875fc33a8a0562e105b">
			<package>https://github.com/pkp/returningAuthorScreening/releases/download/v1.0.0-0/returningAuthorScreening-v1.0.0-0.tar.gz</package>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release</description>
		</release>
	</plugin>
	<plugin category="generic" product="openGraph">
		<name locale="en">Open Graph Plugin</name>
		<name locale="en_US">Open Graph Plugin</name>
		<name locale="fi_FI">Open Graph -lisäosa</name>
		<homepage>https://github.com/ajnyga/openGraph</homepage>
		<summary locale="en">Open Graph Plugin presents published content using the Open Graph protocol.</summary>
		<summary locale="en_US">Open Graph Plugin presents published content using the Open Graph protocol.</summary>
		<summary locale="fi_FI">Open Graph -lisäosa esittää metadatan Open Graph -protokollan mukaisessa muodossa.</summary>
		<description locale="en"><![CDATA[<p>Open Graph Plugin presents published content using the Open Graph protocol. Open Graph tags are used when you content is shared in Facebook</p>]]></description>
		<description locale="en_US"><![CDATA[<p>Open Graph Plugin presents published content using the Open Graph protocol. Open Graph tags are used when you content is shared in Facebook</p>]]></description>
		<description locale="fi_FI"><![CDATA[<p>Open Graph -lisäosa esittää metadatan Open Graph -protokollan mukaisessa muodossa. Tietoja käytetään, kun julkaistua sisältöä jaetaan Facebookissa.</p>]]></description>
		<maintainer>
			<name>Antti-Jussi Nygård</name>
			<institution>The Federation of Finnish Learned Societies</institution>
			<email>ajnyga@gmail.com</email>
		</maintainer>
		<release date="2020-03-29" version="1.0.0.0" md5="03bf5c0dc995bea17f8c1a4f4fdd3425">
			<package>https://github.com/ajnyga/openGraph/releases/download/1.0.0.0/openGraph.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Initial release of the Open Graph Plugin.</description>
		</release>
		<release date="2021-02-09" version="1.0.1.0" md5="1130c000d3c08577d5e6fe711288da5c">
			<package>https://github.com/ajnyga/openGraph/releases/download/1.0.1.0/openGraph.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>OpenGraph plugin for 3.3</description>
		</release>
	</plugin>
	<plugin category="generic" product="publons">
		<name locale="en">Publons Reviewer Recognition Plugin</name>
		<name locale="en_US">Publons Reviewer Recognition Plugin</name>
		<homepage>https://github.com/publons/ojs_3_plugin/</homepage>
		<summary locale="en">This plugin enables integration with Publons Reviewer Recognition Service.</summary>
		<summary locale="en_US">This plugin enables integration with Publons Reviewer Recognition Service.</summary>
		<description locale="en"><![CDATA[In order to provide your reviewers with the opportunity to gain recognition for their reviews on Publons, please register your interest with Publons by visiting https://publons.com/benefits/publishers. Our accounts team will then be in touch to discuss your options and provide further instructions on how to integrate your journal with Publons.]]></description>
		<description locale="en_US"><![CDATA[In order to provide your reviewers with the opportunity to gain recognition for their reviews on Publons, please register your interest with Publons by visiting https://publons.com/benefits/publishers. Our accounts team will then be in touch to discuss your options and provide further instructions on how to integrate your journal with Publons.]]></description>
		<maintainer>
			<name>Publons</name>
			<institution>Publons</institution>
			<email>ojs@publons.com</email>
		</maintainer>
		<release date="2021-06-01" version="2021.6.1.0" md5="a19303dfd77fbd0dc790b5f92e922f2c">
			<package>https://github.com/publons/ojs_3_plugin/releases/download/2021.6.1.0/publons.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/>
			<description>Fix compatibility issues with OJS v3.3. Fixed the send reviews button for already sent reviews.</description>
		</release>
		<release date="2020-06-05" version="2020.6.5.0" md5="71d1dbed08050f4eb589927f02d8e4ab">
			<package>https://github.com/publons/ojs_3_plugin/releases/download/2020.6.5.0/publons.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner"/>
			<description>Fix compatibility issues with OJS v3.2.0. Reset versioning to use calendar versioning.</description>
		</release>
		<release date="2019-10-25" version="3.2.2.0" md5="2f8bc414e9694002adde559844448b80">
			<package>https://github.com/publons/ojs_3/releases/download/3.2.2.0/publons.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="partner"/>
			<description>Minor improvements for Portuguese translations.</description>
		</release>
	</plugin>
	<plugin category="themes" product="pragma">
		<name locale="en">Pragma</name>
		<name locale="en_US">Pragma</name>
		<homepage>https://github.com/pkp/pragma</homepage>
		<summary locale="en">An official theme for OJS 3.</summary>
		<summary locale="en_US">An official theme for OJS 3.</summary>
		<description locale="en"><![CDATA[
		<description locale="en_US"><![CDATA[
			<p>A minimalist OJS theme inspired by early periodicals’ tables of contents featuring a bold use of a monochromatic colour palette.</p>
			<p>Pragma theme was designed and developed by Sophy Ouch, Vitalii Bezsheiko, John Willinsky, and Kevin Stranack.</p>
		]]></description>
		<maintainer>
			<name>Sophy Ouch</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-04-28" version="1.0.0.0" md5="5bc0e85d173c056de5f0a095e83c1710">
			<package>https://github.com/pkp/pragma/releases/download/1.0.0.0/pragma-1.0.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial release.</description>
		</release>
		<release date="2020-06-24" version="1.0.0.1" md5="0100bf8d56f69c998accfc6dbac63b63">
			<package>https://github.com/pkp/pragma/releases/download/v1_0_0-1/pragma-v1_0_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>This update fixes a bug that would show unpublished issues on the homepage. It also implements a number of minor fixes and style improvements. Full details available at https://github.com/pkp/pragma/releases/tag/v1_0_0-1.</description>
		</release>
		<release date="2020-12-08" version="1.1.0.0" md5="214fd31080b2bc8a0cd1302183c5ece3">
			<package>https://github.com/pkp/pragma/releases/download/1.1.0/pragma-1.1.0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>This release updates a theme to be compatible with OJS 3.3.0.1, fixes display of multilingual keywords on article landing page as well as displays article\'s license terms</description>
		</release>
		<release date="2022-10-31" version="1.1.1.0" md5="8ef80667d513b8164f49c6229c1ed8f8">
			<package>https://github.com/pkp/pragma/releases/download/1.1.1/pragma-1.1.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Adds compatibility with PHP 8.1</description>
		</release>
		<release date="2023-03-01" version="1.1.2.0" md5="78b56cba195dbc6eb573c28b98de27f2">
			<package>https://github.com/pkp/pragma/releases/download/1.1.2/pragma-1.1.2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>This release updates the theme to be compatible with OJS 3.4.0</description>
		</release>
		<release date="2023-08-09" version="1.1.2.1" md5="a0f0a24ddc0b455cdca895a5bacb8d54">
			<package>https://github.com/pkp/pragma/releases/download/1.1.2.1/pragma-1.1.2.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official"/>
			<description>Bugfix release for OJS 3.4.0</description>
		</release>
	</plugin>
	<plugin category="importexport" product="archivematicaExport">
		<name locale="en">Archivematica Export</name>
		<name locale="en_US">Archivematica Export</name>
		<homepage>https://github.com/escire/ArchivematicaExportPlugin</homepage>
		<summary locale="en">Exports articles or issues to Archivematica for its preservation.</summary>
		<summary locale="en_US">Exports articles or issues to Archivematica for its preservation.</summary>
		<description locale="en"><![CDATA[<p>This plugin allows you to export articles or full numbers from OJS to an installation of Archivematica preservation software.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin allows you to export articles or full numbers from OJS to an installation of Archivematica preservation software.</p>]]></description>
		<maintainer>
			<name>Manuel Campechano</name>
			<institution>eScire</institution>
			<email>contacto@escire.mx</email>
		</maintainer>
		<release date="2020-07-01" version="1.0.0.0" md5="bb46e07468830059e9a1223ccfd1a24d">
			<package>https://github.com/escire/ArchivematicaExportPlugin/archive/refs/tags/compat-ojs3.1.x.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.0.0</version>
				<version>3.1.0.1</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Initial release for OJS 3.1.0.x/3.1.1.x.</description>
		</release>
		<release date="2020-07-01" version="1.0.0.0" md5="bd657400d738ebb2226de85f0f05e4f2">
			<package>https://github.com/escire/ArchivematicaExportPlugin/archive/compat-ojs3.1.2-x.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Initial release for OJS 3.1.2.x.</description>
		</release>
	</plugin>
	<plugin category="generic" product="pln">
		<name locale="en">PKP|PN (PKP Preservation Network) Plugin</name>
		<name locale="en_US">PKP|PN (PKP Preservation Network) Plugin</name>
		<homepage>https://github.com/pkp/pln</homepage>
		<summary locale="en">Supports preservation of published journal content in the PKP Preservation Network.</summary>
		<summary locale="en_US">Supports preservation of published journal content in the PKP Preservation Network.</summary>
		<description locale="en"><![CDATA[<pa>This plugin enables the automatic preservation of published journal content in the <a href="https://pkp.sfu.ca/pkp-pn/">PKP Preservation Network</a> (PKP|PN).</p><p><strong>Note:</strong> This plugin requires ZipArchive support. See <a href="https://www.php.net/manual/en/zip.installation.php">https://www.php.net/manual/en/zip.installation.php</a> for details.]]></description>
		<description locale="en_US"><![CDATA[<pa>This plugin enables the automatic preservation of published journal content in the <a href="https://pkp.sfu.ca/pkp-pn/">PKP Preservation Network</a> (PKP|PN).</p><p><strong>Note:</strong> This plugin requires ZipArchive support. See <a href="https://www.php.net/manual/en/zip.installation.php">https://www.php.net/manual/en/zip.installation.php</a> for details.]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-07-21" version="2.0.1.1" md5="0e0e672cc708ed5c864832cf030768a5">
			<package>https://github.com/pkp/pln/releases/download/v2.0.1-1/pln-v2.0.1-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>PKP|PN for OJS 3.1.2-x.</description>
		</release>
		<release date="2020-07-21" version="2.0.2.1" md5="6c0187787736f147e50dfe6d8d5af747">
			<package>https://github.com/pkp/pln/releases/download/v2.0.2-1/pln-v2.0.2-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>PKP|PN for OJS 3.2.0-x.</description>
		</release>
		<release date="2020-07-21" version="2.0.3.1" md5="ec93d09928b6932e376861896376733e">
			<package>https://github.com/pkp/pln/releases/download/v2.0.3-1/pln-v2.0.3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>PKP|PN for OJS 3.2.1-x.</description>
		</release>
		<release date="2021-02-02" version="2.0.4.1" md5="9bc3a133965b96639fe22c467353b1b5">
			<package>https://github.com/pkp/pln/releases/download/v2.0.4-1/pln-v2.0.4-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>PKP|PN for OJS 3.3.0-x.</description>
		</release>
		<release date="2021-07-28" version="2.0.4.2" md5="4f44d9ef4ef61742155d7012ad45d9f0">
			<package>https://github.com/pkp/pln/releases/download/v2_0_4-2/pln-v2_0_4-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>PKP|PN for OJS 3.3.0-x.</description>
		</release>
	</plugin>
	<plugin category="generic" product="citations">
		<name locale="en">Scopus/Crossref Citations Plugin</name>
		<name locale="en_US">Scopus/Crossref Citations Plugin</name>
		<homepage>https://github.com/RBoelter/citations</homepage>
		<summary locale="en">Shows the total number of citations and a "cited by" article list from Scopus and/or Crossref.</summary>
		<summary locale="en_US">Shows the total number of citations and a "cited by" article list from Scopus and/or Crossref.</summary>
		<description locale="en"><![CDATA[<p>This plugin uses the DOI of an article to get all citations from Scopus and/or Crossref. Google Scholar and PubMed are also supported. The count and list of citations is displayed in the sidebar of the article details. It is possible to choose between the different providers and display only the amount of results if the list is not desired.</p> <p>For more information check <a href="https://github.com/RBoelter/citations">GitHub</a></p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin uses the DOI of an article to get all citations from Scopus and/or Crossref. Google Scholar and PubMed are also supported. The count and list of citations is displayed in the sidebar of the article details. It is possible to choose between the different providers and display only the amount of results if the list is not desired.</p> <p>For more information check <a href="https://github.com/RBoelter/citations">GitHub</a></p>]]></description>
		<maintainer>
			<name>Ronny Bölter</name>
			<institution>Leibniz Institute for Psychology (ZPID), Trier, Germany</institution>
			<email>rb@leibniz-psychology.org</email>
		</maintainer>
		<release date="2020-11-10" version="3.1.0.1" md5="c5f0a8552057774782ff8dee9e1abd90">
			<package>https://github.com/RBoelter/citations/releases/download/v3_1_0-1/citations-v3_1_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Scopus/Crossref Citations Plugin for OJS 3.1.2-x.</description>
		</release>
		<release date="2020-11-10" version="3.2.0.1" md5="581988e8032cb278240ef3ea4f15e9ba">
			<package>https://github.com/RBoelter/citations/releases/download/v3_2_0-1/citations-v3_2_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Scopus/Crossref Citations Plugin for OJS 3.2.0-x.</description>
		</release>
		<release date="2021-01-19" version="3.1.0.2" md5="cbf80f3ab7834e0bd74ec39cedd89b9b">
			<package>https://github.com/RBoelter/citations/releases/download/v3_1_0-2/citations-v3_1_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>This releases fixes a minor bug that occurred on an empty API response.</description>
		</release>
		<release date="2021-01-19" version="3.2.0.2" md5="e0195313373714a960243eb2a3d6b12e">
			<package>https://github.com/RBoelter/citations/releases/download/v3_2_0-2/citations-v3_2_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Release for OJS 3.2 and 3.3. Fixes a minor bug that occurred on an empty API response.</description>
		</release>
		<release date="2021-02-16" version="3.2.0.3" md5="92a105238b65b7c8ba509c0b8a9750de">
			<package>https://github.com/RBoelter/citations/releases/download/v3_2_0-3/citations-v3_2_0-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Spanish translation added.</description>
		</release>
		<release date="2021-02-16" version="3.3.0.1" md5="fa7bfd78b49404e1a9b2126e23c54244">
			<package>https://github.com/RBoelter/citations/releases/download/v3_3_0-1/citations-v3_3_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Spanish translation added and curl replaced with Guzzle</description>
		</release>
		<release date="2021-08-11" version="3.3.0.2" md5="d25c95cc78a3a68b7cd5015aaf5de4c3">
			<package>https://github.com/RBoelter/citations/releases/download/v3_3_0-2/citations-v3_3_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description>Added Crossref contact information to request permission to use the cited-by service.</description>
		</release>
	</plugin>
	<plugin category="importexport" product="portico">
		<name locale="en">Portico Plugin</name>
		<name locale="en_US">Portico Plugin</name>
		<homepage>https://github.com/pkp/portico</homepage>
		<summary locale="en">Supports export of published content to Portico.</summary>
		<summary locale="en_US">Supports export of published content to Portico.</summary>
		<description locale="en"><![CDATA[<pa>This plugin enables the digital preservation of published content in the <a href="https://www.portico.org/">Portico</a> preservtion service.</p><p><strong>Note:</strong> This plugin requires ZipArchive support. See <a href="https://www.php.net/manual/en/zip.installation.php">https://www.php.net/manual/en/zip.installation.php</a> for details.]]></description>
		<description locale="en_US"><![CDATA[<pa>This plugin enables the digital preservation of published content in the <a href="https://www.portico.org/">Portico</a> preservtion service.</p><p><strong>Note:</strong> This plugin requires ZipArchive support. See <a href="https://www.php.net/manual/en/zip.installation.php">https://www.php.net/manual/en/zip.installation.php</a> for details.]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2020-12-18" version="1.1.0.0" md5="c90ce2078ca1bfddcda031da50221936">
			<package>https://github.com/pkp/portico/releases/download/v1.1.0-0/portico-v1.1.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Portico for OJS 3.1.2-x.</description>
		</release>
		<release date="2020-12-18" version="1.1.1.0" md5="75a018971fd6416c9b3574e3ca2e3ad7">
			<package>https://github.com/pkp/portico/releases/download/v1.1.1-0/portico-v1.1.1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Portico for OJS 3.2.x.</description>
		</release>
		<release date="2021-02-25" version="1.1.0.2" md5="ecb1a59081b3e6ceb151098ef5dfa7dc">
			<package>https://github.com/pkp/portico/releases/download/v1_1_0-2/portico-v1_1_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official"/>
			<description>Portico for OJS 3.1.2-x.</description>
		</release>
		<release date="2021-02-25" version="1.1.1.2" md5="de6bd385c91f4755855d8e603cafcce5">
			<package>https://github.com/pkp/portico/releases/download/v1_1_1-2/portico-v1_1_1-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Portico for OJS 3.2.x.</description>
		</release>
		<release date="2021-03-24" version="1.1.1.3" md5="bd2d1dbc41517a5246a26e715c69e51a">
			<package>https://github.com/pkp/portico/releases/download/v1_1_1-3/portico-v1_1_1-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Portico for OJS 3.2.x.</description>
		</release>
		<release date="2021-02-25" version="1.1.2.2" md5="242f71024cb2a59953a598185f6703fe">
			<package>https://github.com/pkp/portico/releases/download/v1_1_2-2/portico-v1_1_2-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version><!-- Previous 3.3.x did not have flysystem sftp -->
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Portico for OJS 3.3.x.</description>
		</release>
	</plugin>
	<plugin category="generic" product="ror">
		<name locale="en">Research Organization Registry(ROR) Plugin</name>
		<name locale="en_US">Research Organization Registry(ROR) Plugin</name>
		<homepage>https://github.com/withanage/ror/</homepage>
		<summary locale="en">OJS 3 Plugin for adding Organization names for author affiliations provided by ROR.org</summary>
		<summary locale="en_US">OJS 3 Plugin for adding Organization names for author affiliations provided by ROR.org</summary>
		<description locale="en"><![CDATA[<p>The ROR plugin integrates support for <a href="https://ror.org/">ROR</a>. Organizations maintained by ROR.org are automatically fetched using an auto suggesting function. For multilingual journals, additionally supported languages will be pre-filled given, ROR.org has the corresponding names in the OJS supported languages. </p>]]>></description>
		<description locale="en_US"><![CDATA[<p>The ROR plugin integrates support for <a href="https://ror.org/">ROR</a>. Organizations maintained by ROR.org are automatically fetched using an auto suggesting function. For multilingual journals, additionally supported languages will be pre-filled given, ROR.org has the corresponding names in the OJS supported languages. </p>]]>></description>
		<maintainer>
			<name>Dulip Withanage</name>
			<institution>German National Library of Science and Technology (TIB), Hannover, Germany </institution>
			<email>dulip.withanage@gmail.com</email>
		</maintainer>
		<release date="2019-11-25" version="1.0.0.0" md5="b18b3a94e249778feda0265f36fa59b6">
			<package>https://github.com/withanage/ror/releases/download/v1_0_0-0/ror-v1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="partner"/>
			<description>Initial release</description>
		</release>
		<release date="2021-01-28" version="1.0.0.8" md5="623c8571a116a72adf3211febaad68fe">
			<package>https://github.com/withanage/ror/releases/download/v1_0_0-8/ror-v1_0_0-8.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/>
			<description>Adds support for OJS 3.3, better handling of placeholders</description>
		</release>
		<release date="2022-02-14" version="1.0.0.12" md5="34efcef88c72ff22a5b4282d8de98545">
			<package>https://github.com/withanage/ror/releases/download/v1_0_0-12/ror-v1_0_0-12.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner"/>
			<description>Adds support for OPS 3.3</description>
		</release>
	</plugin>
	<plugin category="importexport" product="medra">
		<name locale="en">DOI to mEDRA xml export and registration plugin</name>
		<name locale="en_US">DOI to mEDRA xml export and registration plugin</name>
		<homepage>https://github.com/pkp/medra/</homepage>
		<summary locale="en">Allows DOI export in ONIX4DOI format and the registration with mEDRA.</summary>
		<summary locale="en_US">Allows DOI export in ONIX4DOI format and the registration with mEDRA.</summary>
		<description locale="en"><![CDATA[<p>The mEDRA plugin enables the export of issue, article and galley metadata in ONIX4DOI format and
the registration of DOIs with mEDRA.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The mEDRA plugin enables the export of issue, article and galley metadata in ONIX4DOI format and
the registration of DOIs with mEDRA.</p>]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2021-01-26" version="3.0.0.0" md5="56b2461353572eeac7b3c2bb30e50d33">
			<package>https://github.com/pkp/medra/releases/download/v3_0_0-0/medra-v3_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>mEDRA plugin for OJS 3.3.0-x</description>
		</release>
		<release date="2021-04-12" version="3.0.0.1" md5="78dec2d322df31f3946b0a3e50300fc0">
			<package>https://github.com/pkp/medra/releases/download/v3_0_0-1/medra-v3_0_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the plugin for OJS 3.3.0</description>
		</release>
		<release date="2021-06-07" version="3.0.0.2" md5="10ef28bb21b3a83da0f26c216145ae93">
			<package>https://github.com/pkp/medra/releases/download/v3_0_0-2/medra-v3_0_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Bugfix release of the plugin for OJS 3.3.0</description>
		</release>
		<release date="2023-02-14" version="3.0.0.3" md5="5f0a010b63616402f9ca4afc30b24993">
			<package>https://github.com/pkp/medra/releases/download/v3_0_0-3/medra-v3_0_0-3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>Collection element and unstructured citation list, for OJS 3.3.0-14</description>
		</release>
		<release date="2023-05-04" version="3.0.0.4" md5="12ff4299466a749c3acb075d518042b6">
			<package>https://github.com/pkp/medra/releases/download/v3_0_0-4/medra-v3_0_0-4.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official" />
			<description>No contributors, subtitle element, different schema location for test and production</description>
		</release>
	</plugin>
	<plugin category="pubIds" product="ark">
		<name locale="en">ARK</name>
		<name locale="en_US">ARK</name>
		<homepage>https://github.com/yasielpv/pkp-ark-pubid</homepage>
		<summary locale="en">Allows assign ARK ID to issue, article and galley.</summary>
		<summary locale="en_US">Allows assign ARK ID to issue, article and galley.</summary>
		<description locale="en"><![CDATA[<p>The ARK plugin enables the assignation and management of ARK ID to issue, article and galley.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The ARK plugin enables the assignation and management of ARK ID to issue, article and galley.</p>]]></description>
		<maintainer>
			<name>Yasiel Perez Vera</name>
			<institution>Universidad La Salle</institution>
			<email>yasielpv@gmail.com</email>
		</maintainer>
		<release date="2021-05-01" version="1.0.1.0" md5="9fc548a9be4f39264fd2a9cc75acdcf1">
			<package>https://github.com/yasielpv/pkp-ark-pubid/releases/download/ojs-3.1/pkp-ark-pubid-ojs-3.1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>ARK plugin for OJS 3.0.x.x - 3.1.x.x</description>
		</release>
		<release date="2021-05-01" version="1.0.1.0" md5="a5df447ba2847da0204a8ae7c15b0ac3">
			<package>https://github.com/yasielpv/pkp-ark-pubid/releases/download/ojs-3.3/pkp-ark-pubid-ojs-3.3.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>ARK plugin for OJS 3.2.x.x - 3.3.x.x</description>
		</release>
		<release date="2021-10-12" version="1.0.3.1" md5="671b70ecbe53728a66a0ea5425bd2e86">
			<package>https://github.com/yasielpv/pkp-ark-pubid/releases/download/v1_0_3-1/pkp-ark-pubid-v1_0_3-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>ARK plugin for OJS 3.0.x.x - 3.1.x.x</description>
		</release>
		<release date="2021-10-12" version="1.0.3.0" md5="27edff490c13a23f96feb1a9a9d17f17">
			<package>https://github.com/yasielpv/pkp-ark-pubid/releases/download/v1_0_3-0/pkp-ark-pubid-v1_0_3-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>ARK plugin for OJS 3.2.x.x - 3.3.x.x</description>
		</release>
	</plugin>
	<plugin category="pubIds" product="purl">
		<name locale="en">PURL</name>
		<name locale="en_US">PURL</name>
		<homepage>https://github.com/yasielpv/pkp-purl-pubid</homepage>
		<summary locale="en">Allows assign PURL ID to issue, article and galley.</summary>
		<summary locale="en_US">Allows assign PURL ID to issue, article and galley.</summary>
		<description locale="en"><![CDATA[<p>The PURL plugin enables the assignation and management of PURL ID to issue, article and galley.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>The PURL plugin enables the assignation and management of PURL ID to issue, article and galley.</p>]]></description>
		<maintainer>
			<name>Yasiel Perez Vera</name>
			<institution>Universidad La Salle</institution>
			<email>yasielpv@gmail.com</email>
		</maintainer>
		<release date="2021-04-21" version="1.0.0.0" md5="7b1f5190076c0540ea8769f40d1026ca">
			<package>https://github.com/yasielpv/pkp-purl-pubid/releases/download/v1_0_0-0/pkp-purl-pubid-v1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="reviewed" />
			<description>PURL plugin for OJS 3.0.x.x - 3.1.x.x</description>
		</release>
		<release date="2021-05-01" version="1.0.1.0" md5="4bdc81d534df8b3aee002d3028d880dc">
			<package>https://github.com/yasielpv/pkp-purl-pubid/releases/download/v1_0_1-0/pkp-purl-pubid-v1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
			</compatibility>
			<certification type="reviewed" />
			<description>PURL plugin for OJS 3.2.x.x - 3.3.x.x</description>
		</release>
	</plugin>
	<plugin category="generic" product="openid">
		<name locale="en">OpenID Authentication Plugin</name>
		<name locale="en_US">OpenID Authentication Plugin</name>
		<homepage>https://github.com/leibniz-psychology/openid</homepage>
		<summary locale="en">This plugin allows users to register and login with an OpenID Connect provider such as Keycloak, Google, Orchid, Microsoft and Apple</summary>
		<summary locale="en_US">This plugin allows users to register and login with an OpenID Connect provider such as Keycloak, Google, Orchid, Microsoft and Apple</summary>
		<description locale="en"><![CDATA[<p>This plugin enables logging in to PKP applications using OpenID Connect providers. It currently supports Google, Apple ID, Microsoft Azure AD and Orchid. It is also possible to configure a custom OpenID Connect provider such as Keycloak.</p><p>For more information check <a href="https://github.com/leibniz-psychology/openid">GitHub</a><br><strong>Read the <a href="https://github.com/leibniz-psychology/openid/wiki">wiki</a> if you need help with the configuration.</strong></p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin enables logging in to PKP applications using OpenID Connect providers. It currently supports Google, Apple ID, Microsoft Azure AD and Orchid. It is also possible to configure a custom OpenID Connect provider such as Keycloak.</p><p>For more information check <a href="https://github.com/leibniz-psychology/openid">GitHub</a><br><strong>Read the <a href="https://github.com/leibniz-psychology/openid/wiki">wiki</a> if you need help with the configuration.</strong></p>]]></description>
		<maintainer>
			<name>Ronny Bölter</name>
			<institution>Leibniz Institute for Psychology (ZPID), Trier, Germany</institution>
			<email>rb@leibniz-psychology.org</email>
		</maintainer>
		<release date="2021-03-03" version="3.3.0.6" md5="3122fbf0257ada5fc24a6898a425fed4">
			<package>https://github.com/leibniz-psychology/openid/releases/download/v3_3_0-6/openid-v3_3_0-6.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description>OpenID plugin for OJS 3.3.0-x (first release)</description>
		</release>
		<release date="2021-03-12" version="3.3.0.7" md5="f82afb94d9d5deb12dab22a7125c3e3c">
			<package>https://github.com/leibniz-psychology/openid/releases/download/v3_3_0-7/openid-v3_3_0-7.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
			</compatibility>
			<certification type="reviewed" />
			<description>Registration as reviewer added. Review interest added. PHP warning fixed</description>
		</release>
	</plugin>
	<plugin category="importexport" product="datacite">
		<name locale="en">Datacite</name>
		<name locale="en_US">Datacite</name>
		<homepage>https://github.com/withanage/datacite</homepage>
		<summary locale="en">This plugin allows DOI registration via Datacite</summary>
		<summary locale="en_US">This plugin allows DOI registration via Datacite</summary>
		<description locale="en"></description>
		<description locale="en_US"></description>
		<maintainer>
			<name>Dulip Withanage</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2021-03-31" version="1.0.0.3" md5="806be4dd55f1879d1d45557072f5bdcd">
			<package>https://github.com/withanage/datacite/releases/download/v1_0_0-4/datacite-v1_0_0-4.tar.gz</package>
			<compatibility application="omp">
				<version>3.1.0.0</version>
				<version>3.1.1.0</version>
				<version>3.1.1.1</version>
				<version>3.1.1.2</version>
				<version>3.1.1.3</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial Release of Datacite plugin for OMP 3.1.x.</description>
		</release>
		<release date="2021-12-11" version="1.0.0.5" md5="845fb6cc45383125de994f12d1256398">
			<package>https://github.com/withanage/datacite/releases/download/v1_0_0-5/datacite-v1_0_0-5.tar.gz</package>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Datacite plugin for OMP 3.3.0</description>
		</release>
		<release date="2022-06-15" version="1.0.0.6" md5="b25ae22a56077295304f9653562a9923">
			<package>https://github.com/withanage/datacite/releases/download/v1_0_0-6/datacite-v1_0_0-6.tar.gz</package>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="official"/>
			<description>Datacite plugin  Bugfix release</description>
		</release>
	</plugin>
	<plugin category="generic" product="browseBySection">
		<name locale="en">Browse By Section Plugin</name>
		<name locale="en_US">Browse By Section Plugin</name>
		<homepage>https://github.com/pkp/browseBySection</homepage>
		<summary locale="en">A plugin which allows visitors to browse published articles by section.</summary>
		<summary locale="en_US">A plugin which allows visitors to browse published articles by section.</summary>
		<description locale="en"><![CDATA[<p>This plugin allows the journal to configure new public facing pages for each journal section, which list the published articles in that section by publication date or by title.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin allows the journal to configure new public facing pages for each journal section, which list the published articles in that section by publication date or by title.</p>]]></description>
		<maintainer>
			<name>Public Knowledge Project</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2021-03-11" version="1.2.0.0" md5="203bdc9ce993b3291657ce407cff1306">
			<package>https://github.com/pkp/browseBySection/releases/download/v1_2_0_0/browseBySection-v1_2_0_0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>~3.3.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Browse By Section for OJS 3.3 (first release)</description>
		</release>
		<release date="2021-03-11" version="1.1.0.0" md5="c7a448f4220b4c2b71a884af58f78437">
			<package>https://github.com/pkp/browseBySection/releases/download/v1_1_0_0/browseBySection-v1_1_0_0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official" />
			<description>Browse By Section for OJS 3.1.2 (first release)</description>
		</release>
		<release date="2021-03-11" version="1.0.2.0" md5="4b8dcb8faeea15e727ac5960e7d432ad">
			<package>https://github.com/pkp/browseBySection/releases/download/v1_0_2_0/browseBySection-v1_0_2_0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
			</compatibility>
			<certification type="official" />
			<description>Browse By Section for OJS 3.3 (first release)</description>
		</release>
		<release date="2023-04-06" version="1.2.1.0" md5="4eb61422962e14e767188283ae24cf34">
			<package>https://github.com/pkp/browseBySection/releases/download/v1_2_1-0/browseBySection-v1_2_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="official" />
			<description>Browse By Section for OJS 3.4</description>
		</release>
	</plugin>
	<plugin category="reports" product="scieloSubmissionsReport">
		<name locale="en">SciELO Submissions Report</name>
		<name locale="en_US">SciELO Submissions Report</name>
		<name locale="es_ES">Relatorio de Envíos de SciELO</name>
		<name locale="pt_BR">Relatório de Submissões SciELO</name>
		<homepage>https://github.com/lepidus/scieloSubmissionsReport</homepage>
		<summary locale="en">This plugin generates a CSV spreadsheet with submissions information that is usually requested by SciELO</summary>
		<summary locale="en_US">This plugin generates a CSV spreadsheet with submissions information that is usually requested by SciELO</summary>
		<summary locale="es_ES">Este módulo genera un informe CSV con la información de los envíos que normalmente solicita SciELO.</summary>
		<summary locale="pt_BR">Este plugin gera um relatório CSV com informação das submissões que é normalmente requisitada pela SciELO.</summary>
		<description locale="en"><![CDATA[<p>This plugin generates a CSV spreadsheet with information that is usually requested by SciELO, based on the website submissions.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin generates a CSV spreadsheet with information that is usually requested by SciELO, based on the website submissions.</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Este módulo genera un informe CSV con información que normalmente solicita SciELO, según los envíos del sitio web.</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Este plugin gera um relatório CSV com informações que são normalmente solicitadas pela SciELO, com base nas submissões do website.</p>]]></description>
		<maintainer>
			<name>SciELO Brazil Online Submission and Preprints Unit</name>
			<institution>SciELO in collaboration with Lepidus</institution>
			<email>scielo.submission@scielo.org</email>
		</maintainer>
		<release date="2021-04-19" version="1.4.11.0" md5="5f267019d57a3c6fd7d167409d673416">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v1.4.11.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Improves UTF-8 enconding support and prevents SQL injections. First release sent to PKP Plugin Gallery.</description>
			<description locale="en_US">Improves UTF-8 enconding support and prevents SQL injections. First release sent to PKP Plugin Gallery.</description>
			<description locale="es_ES">Mejora la compatibilidad con la codificación UTF-8 y evita las inyecciones de SQL. Primera versión que se enviará a la galería de módulos de PKP.</description>
			<description locale="pt_BR">Melhora suporte a codificação UTF-8 e previne injeções SQL. Primeira versão a ser enviada à galeria de plugins da PKP.</description>
		</release>
		<release date="2021-05-05" version="1.4.12.0" md5="ec9db1a2a2f77bab39120d724c6792d9">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v1.4.12.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Fixes bug with the report filter by final decision date. This bug affected the submissions included in the report in both OPS and OJS.</description>
			<description locale="en_US">Fixes bug with the report filter by final decision date. This bug affected the submissions included in the report in both OPS and OJS.</description>
			<description locale="es_ES">Corrige bug con el filtro de la fecha de decisión final. Este error afectó los envíos incluidos en el informe tanto en OPS como en OJS.</description>
			<description locale="pt_BR">Corrige bug com o filtro por data de decisão final. Esse bug afetava as submissões incluidas no relatório tanto no OPS quanto no OJS.</description>
		</release>
		<release date="2021-05-11" version="1.4.13.0" md5="94ecb1c4174ad01a89eaedbcc01a2260">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v1.4.13.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Correction in filtering by submission date that resulted in empty reports</description>
			<description locale="en_US">Correction in filtering by submission date that resulted in empty reports</description>
			<description locale="es_ES">Corrección en el filtrado por fecha de envío que resultó en informes vacíos</description>
			<description locale="pt_BR">Correção na filtragem por data de submissão que resultava em relatórios vazios</description>
		</release>
		<release date="2021-05-18" version="1.4.14.0" md5="16d214a9dee2e9660608ae2a6cf4320b">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v1.4.14.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Fixes plugin gallery problem, upgrades interface and fixes minor problems</description>
			<description locale="en_US">Fixes plugin gallery problem, upgrades interface and fixes minor problems</description>
			<description locale="es_ES">Corrige problema con la galería de módulos, actualiza la interfaz y corrige problemas menores</description>
			<description locale="pt_BR">Corrige problema com a galeria de plugins, atualiza interface e corrige menores problemas</description>
		</release>
		<release date="2022-01-14" version="1.4.15.0" md5="5cee20e2239bd6f91830f791dbb60dd9">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v1.4.15.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Fixes bad request issue on public site pages.</description>
			<description locale="en_US">Fixes bad request issue on public site pages.</description>
			<description locale="es_ES">Soluciona el problema de solicitud incorrecta en las páginas del sitio público.</description>
			<description locale="pt_BR">Corrige problema de má requisição em páginas públicas do site.</description>
		</release>
		<release date="2021-07-22" version="2.0.2.0" md5="3a790d81dadb7463fe01cab0a37ab02b">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v2.0.2.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This is the first release of this plugin compatible with OJS and OPS in 3.3.0-x versions.</description>
			<description locale="en_US">This is the first release of this plugin compatible with OJS and OPS in 3.3.0-x versions.</description>
			<description locale="es_ES">Esta es la primera versión de este módulo compatible con OJS y OPS en las versiones 3.3.0-x.</description>
			<description locale="pt_BR">Esta é a primeira release deste plugin a ser compatível com OJS e OPS nas versões 3.3.0-x.</description>
		</release>
		<release date="2021-10-26" version="2.0.6.0" md5="1c83dd6e2fa52bff002b58f16a437926">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v2.0.6.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Adds support for uncovered editor decisions in the Last Decision column and fixes bug that prevented the loading of the Plugins page at Site Settings</description>
			<description locale="en_US">Adds support for uncovered editor decisions in the Last Decision column and fixes bug that prevented the loading of the Plugins page at Site Settings</description>
			<description locale="es_ES">Agrega soporte para decisiones editoriales que no se cubrieron en la columna Última decisión y corrige el error que impedía la carga de la página de módulos en la Configuración del sitio</description>
			<description locale="pt_BR">Dá suporte a decisões editoriais que não eram cobertas na coluna da Última Decisão e corrige erro que impedia o carregamento da página de plugins nas Configurações do Portal</description>
		</release>
		<release date="2021-11-23" version="2.0.7.0" md5="feb97e017e410b27c50e2d64b7ea7417">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v2.0.7.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Fixes problem that occurred when a submitter didn\'t have a country filled</description>
			<description locale="en_US">Fixes problem that occurred when a submitter didn\'t have a country filled</description>
			<description locale="es_ES">Soluciona el problema que se producía cuando el autor que realizaba el envío no tenía la afiliación completa</description>
			<description locale="pt_BR">Corrige problema que ocorria quando o autor submissor não possuía a afiliação preenchida</description>
		</release>
		<release date="2021-11-24" version="2.1.0.0" md5="693dd103de4a95009da119a260a8e6f5">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v2.1.0.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Increases overall plugin performance. Now it only takes 20% of the time it took to generate the report before.</description>
			<description locale="en_US">Increases overall plugin performance. Now it only takes 20% of the time it took to generate the report before.</description>
			<description locale="es_ES">Aumenta el rendimiento general del módulo. Ahora solo toma el 20% del tiempo que tomaba generar el informe antes.</description>
			<description locale="pt_BR">Aumenta o desempenho geral do plugin. Agora, é necessário apenas 20% do tempo necessário anteriormente para gerar o relatório.</description>
		</release>
		<release date="2022-05-30" version="2.2.0.0" md5="91eeb24e4508da532fd9752a5c32c0b0">
			<package>https://github.com/lepidus/scieloSubmissionsReport/releases/download/v2.2.0.0/scieloSubmissionsReport.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release adds the columns of abstract views and PDF views to the report. This change is currently available only to OPS.</description>
			<description locale="en_US">This release adds the columns of abstract views and PDF views to the report. This change is currently available only to OPS.</description>
			<description locale="es_ES">Esta versión agrega las columnas para vistas de PDF y resumen. Estos cambios actualmente solo están disponibles para OPS.</description>
			<description locale="pt_BR">Essa versão adiciona as colunas de visualizações do PDF e do resumo. Essas mudanças estão disponíveis atualmente apenas para OPS.</description>
		</release>
	</plugin>
	<plugin category="generic" product="lucene">
		<name locale="en">Lucene/Solr Plugin</name>
		<name locale="en_US">Lucene/Solr Plugin</name>
		<homepage>https://github.com/ojsde/lucene</homepage>
		<summary locale="en">Solr/Lucene integration for OJS</summary>
		<summary locale="en_US">Solr/Lucene integration for OJS</summary>
		<description locale="en"><![CDATA[<p>This plugins  integrates the solr/search for  OJS journals.  <b>Warning! </b> Integration requires <b>additional configuration</b>  . Please see the <a href="https://github.com/ojsde/lucene#readme">help</a> page for configuration  and we advise to test it on a test installation, before using on a production server.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugins  integrates the solr/search for  OJS journals.  <b>Warning! </b> Integration requires <b>additional configuration</b>  . Please see the <a href="https://github.com/ojsde/lucene#readme">help</a> page for configuration  and we advise to test it on a test installation, before using on a production server.</p>]]></description>
		<maintainer>
			<name>Dulip Withanage</name>
			<institution>Public Knowledge Project</institution>
			<email>pkp.contact@gmail.com</email>
		</maintainer>
		<release date="2021-05-23" version="1.2.0.1" md5="1085b616bf658467304d63f71baf9cd8">
			<package>https://github.com/ojsde/lucene/releases/download/v1_2_0-1/lucene-v1_2_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
			</compatibility>
			<certification type="official"/>
			<description>Initial Release of Lucene/Solr plugin for OJS 3.2</description>
		</release>
	</plugin>
	<plugin category="generic" product="epubViewer">
		<name locale="en">Bibi Epub Viewer</name>
		<name locale="en_US">Bibi Epub Viewer</name>
		<name locale="pt_BR">Visualizador de EPUB Bibi</name>
		<name locale="es_ES">Visor EPUBs Bibi</name>
		<homepage>https://github.com/lepidus/epubViewer</homepage>
		<summary locale="en">A plugin for viewing embedded EPUBs in Open Journal Systems and Open Monograph Press using Bibi Epub Reader.</summary>
		<summary locale="en_US">A plugin for viewing embedded EPUBs in Open Journal Systems and Open Monograph Press using Bibi Epub Reader.</summary>
		<summary locale="pt_BR">Plugin para visualização embutida de EPUBs no Open Journal Systems e Open Monograph Press utilizando o Bibi Epub Reader.</summary>
		<summary locale="es_ES">Módulo para visualización incrustada de EPUB en Open Journal Systems y Open Monograph Press con Bibi EPUB Reader.</summary>
		<description locale="en"><![CDATA[<p>A plugin for viewing embedded EPUBs in Open Journal Systems and Open Monograph Press using Bibi Epub Reader.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>A plugin for viewing embedded EPUBs in Open Journal Systems and Open Monograph Press using Bibi Epub Reader.</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Módulo para visualización incrustada de EPUB en Open Journal Systems y Open Monograph Press con Bibi EPUB Reader.</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Plugin para visualização embutida de EPUBs no Open Journal Systems e Open Monograph Press utilizando o Bibi Epub Reader.</p>]]></description>
		<maintainer>
			<name>Lepidus Tecnologia Team</name>
			<institution>Lepidus Tecnologia</institution>
			<email>contato@lepidus.com.br</email>
		</maintainer>
		<release date="2021-11-08" version="1.0.5.0" md5="77b5a5e6f7e66e72bf894eda4b8261e9">
			<package>https://github.com/lepidus/epubViewer/releases/download/v1.0.5/epubViewer.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>

			<certification type="reviewed"/>
			<description locale="en">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to display embedded EPUBs files in publications.</description>
			<description locale="en_US">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to display embedded EPUBs files in publications.</description>
			<description locale="es_ES">Esta es la primera versión de este módulo que se envía a la Galería de módulos de PKP. Su funcionalidad principal es mostrar archivos EPUBs incrustados en publicaciones.</description>
			<description locale="pt_BR">Esta é a primeira versão deste plugin a ser enviada para a galeria de plugins da PKP. Sua principal funcionalidade é exibir arquivos EPUBs embutidos nas publicações.</description>
		</release>
		<release date="2023-07-28" version="2.0.0.0" md5="bae922a1a1a85da5135e626537d60481">
			<package>https://github.com/lepidus/epubViewer/releases/download/v2.0.0/epubViewer.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>

			<certification type="reviewed"/>
			<description locale="en">This release adds support for 3.4.0-x application releases.</description>
			<description locale="es">Esta versión agrega soporte para las versiones de aplicaciones 3.4.0-x</description>
			<description locale="pt_BR">Essa versão adiciona suporte às versões 3.4.0-x das aplicações.</description>
		</release>
	</plugin>
	<plugin category="generic" product="inlineHtmlGalley">
		<name locale="en">Inline Html Galley</name>
		<name locale="en_US">Inline Html Galley</name>
		<homepage>https://github.com/ulsdevteam/inlineHtmlGalley</homepage>
		<summary locale="en">This plugin provides inline display of article galleys.</summary>
		<summary locale="en_US">This plugin provides inline display of article galleys.</summary>
		<description locale="en">This plugin provides inline display of article galleys. It replaces the default HTML Article Galley plugin\'s use of an iframe to deliver the HTML Galleys.</description>
		<description locale="en_US">This plugin provides inline display of article galleys. It replaces the default HTML Article Galley plugin\'s use of an iframe to deliver the HTML Galleys.</description>
		<maintainer>
			<name>University Library System</name>
			<institution>University of Pittsburgh</institution>
			<email>uls-systemsdevelopment@pitt.edu</email>
		</maintainer>
		<release date="2022-05-10" version="1.2.0.0" md5="036171310fcd92f4da445fa7fa1f356a">
			<package>https://github.com/ulsdevteam/inlineHtmlGalley/releases/download/v1.2.0-0/inlineHtmlGalley-1.2.0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.1.1.4</version>
				<version>3.1.2.0</version>
				<version>3.1.2.1</version>
				<version>3.1.2.2</version>
				<version>3.1.2.3</version>
				<version>3.1.2.4</version>
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="partner" />
			<description>Release of the inlineHtmlGalley plugin for OJS 3.x </description>
		</release>
	</plugin>
	<plugin category="generic" product="plaudit">
		<name locale="en">Plaudit</name>
		<name locale="en_US">Plaudit</name>
		<name locale="pt_BR">Plaudit</name>
		<name locale="es_ES">Plaudit</name>
		<homepage>https://github.com/lepidus/plaudit</homepage>
		<summary locale="en">This plugin adds the Plaudit widget to the submission details on the submission\'s landing page.</summary>
		<summary locale="en_US">This plugin adds the Plaudit widget to the submission details on the submission\'s landing page.</summary>
		<summary locale="pt_BR">Este plugin adiciona o widget Plaudit aos detalhes na página pública da submissão.</summary>
		<summary locale="es_ES">Este módulo agrega el widget Plaudit a los detalles de envío en el sitio público.</summary>
		<description locale="en"><![CDATA[<p>This plugin adds the Plaudit widget to the submission details on the submission\'s landing page.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin adds the Plaudit widget to the submission details on the submission\'s landing page.</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Este plugin adiciona o widget Plaudit aos detalhes na página pública da submissão.</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Este módulo agrega el widget Plaudit a los detalles de envío en el sitio público.</p>]]></description>
		<maintainer>
			<name>Lepidus Tecnologia Team</name>
			<institution>Lepidus Tecnologia</institution>
			<email>contato@lepidus.com.br</email>
		</maintainer>
		<release date="2022-07-25" version="1.0.1.0" md5="42b2f43bdcbbaaeaa4b0e0fafbc76725">
			<package>https://github.com/lepidus/plaudit/releases/download/v1.0.1/plaudit.tar.gz</package>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to add the Plaudit widget to the submission details on the submission\'s landing page.</description>
			<description locale="en_US">This is the first release of this plugin to be sent to PKP Plugin Gallery. Its main functionality is to add the Plaudit widget to the submission details on the submission\'s landing page.</description>
			<description locale="es_ES">Esta es la primera versión de este módulo que se envía a la Galería de módulos de PKP. Su funcionalidad principal es agregar el widget Plaudit a los detalles de envío en el sitio web público.</description>
			<description locale="pt_BR">Esta é a primeira versão deste plugin a ser enviada para a galeria de plugins da PKP. Sua principal funcionalidade é adicionar o widget Plaudit aos detalhes na página pública da submissão.</description>
		</release>
		<release date="2022-08-10" version="1.0.2.0" md5="e96035bb35efcb12aaaf5fa3bf18e41a">
			<package>https://github.com/lepidus/plaudit/releases/download/v1.0.2/plaudit.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">This release adds support for OJS and OMP in versions 3.3.0-x.</description>
			<description locale="en_US">This release adds support for OJS and OMP in versions 3.3.0-x.</description>
			<description locale="es_ES">Esta versión agrega compatibilidad con OJS y OMP en las versiones 3.3.0-x.</description>
			<description locale="pt_BR">Esta versão adiciona suporte para o OJS e OMP nas versões 3.3.0-x.</description>
		</release>
		<release date="2022-08-24" version="1.0.3.0" md5="ada945224cf8cb5db0b03cb91621d474">
			<package>https://github.com/lepidus/plaudit/releases/download/v1.0.3/plaudit.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">This is the first version of the plugin compatible with OJS and OMP, in versions 3.3.0-x. It brings usability improvements over the previous version.</description>
			<description locale="en_US">This is the first version of the plugin compatible with OJS and OMP, in versions 3.3.0-x. It brings usability improvements over the previous version.</description>
			<description locale="es_ES">Esta es la primera versión del módulo compatible con OJS y OMP, en las versiones 3.3.0-x. Trae mejoras de usabilidad en comparación con la versión anterior.</description>
			<description locale="pt_BR">Esta é a primeira versão do plugin compatível com OJS e OMP, nas versões 3.3.0-x. Traz melhorias de usabilidade em relação à versão anterior.</description>
		</release>
	</plugin>
	<plugin category="generic" product="toggleRequiredMetadata">
		<name locale="en">Toggle Required Metadata</name>
		<name locale="en_US">Toggle Required Metadata</name>
		<name locale="pt_BR">Alternar Metadados requeridos</name>
		<name locale="es_ES">Alternar los metadatos requeridos</name>
		<homepage>https://github.com/lepidus/toggleRequiredMetadata</homepage>
		<summary locale="en">This plugin makes the "affiliation" and "ORCID" fields required.</summary>
		<summary locale="en_US">This plugin makes the "affiliation" and "ORCID" fields required.</summary>
		<summary locale="pt_BR">Este plugin torna os campos "afiliação" e "ORCID" de preenchimento obrigatório.</summary>
		<summary locale="es_ES">Este plugin hace que los campos "afiliación" y "ORCID" sean obligatorios.</summary>
		<description locale="en"><![CDATA[<p>This plugin makes the "affiliation" and "ORCID" fields required.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>This plugin makes the "affiliation" and "ORCID" fields required.</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Este plugin torna os campos "afiliação" e "ORCID" de preenchimento obrigatório.</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Este módulo hace que los campos "afiliación" y "ORCID" sean obligatorios.</p>]]></description>
		<maintainer>
			<name>Lepidus Tecnologia Team</name>
			<institution>Lepidus Tecnologia</institution>
			<email>contato@lepidus.com.br</email>
		</maintainer>
		<release date="2022-08-29" version="1.0.0.0" md5="efe3aeb9c9f0289129fcc0c9d9a7b889">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v1.0.0/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Makes it required for the authors/contributors of the submission to fill in the "affiliation" field.</description>
			<description locale="en_US">Makes it required for the authors/contributors of the submission to fill in the "affiliation" field.</description>
			<description locale="es_ES">Obliga a los autores/colaboradores del envío a rellenar el campo "afiliación".</description>
			<description locale="pt_BR">Torna obrigatório o preenchimento do campo "afiliação" pelos autores/contribuidores da submissão.</description>
		</release>
		<release date="2022-08-31" version="1.1.0.0" md5="c604d045608ab70350356b23ee62372f">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v1.1.0/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Makes the "ORCID" field required.</description>
			<description locale="en_US">Makes the "ORCID" field required.</description>
			<description locale="es_ES">Hace que el campo "ORCID" sea obligatorio.</description>
			<description locale="pt_BR">Torna o campo "ORCID" obrigatório.</description>
		</release>
		<release date="2022-09-13" version="1.2.2.0" md5="2fcbc6ada36b1c84bf78fdeeac4a16e8">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v1.2.2/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Allows configuring the fields to be required through the plugin settings. Checks if ORCID Profile Plugin is disabled to be able to require "ORCID" field.</description>
			<description locale="en_US">Allows configuring the fields to be required through the plugin settings. Checks if ORCID Profile Plugin is disabled to be able to require "ORCID" field.</description>
			<description locale="es_ES">Permite configurar los campos a ser requeridos a través de la configuración del módulo. Comprueba si el módulo de Perfil ORCID está deshabilitado para poder solicitar el campo "ORCID".</description>
			<description locale="pt_BR">Permite configurar os campos a serem requeridos através das configurações do plugin. Verifica se o plugin Perfil ORCID está desativado para que seja possível requerer o campo "ORCID".</description>
		</release>
		<release date="2022-10-10" version="1.2.3.1" md5="3a139effc5086882f3f0e2a66e25ee46">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v1.2.3.1/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Allows you to configure the Biography Statement field as required.</description>
			<description locale="en_US">Allows you to configure the Biography Statement field as required.</description>
			<description locale="es_ES">Permite configurar el campo Resumen de Biografía como obligatorio.</description>
			<description locale="pt_BR">Permite configurar o campo Resumo da Biografia como obrigatório.</description>
		</release>
		<release date="2022-11-01" version="1.2.4.0" md5="5bab040207792101515c43db91eca25f">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v1.2.4/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Add CSRF checks.</description>
			<description locale="en_US">Add CSRF checks.</description>
			<description locale="es_ES">Añadir comprobación CSRF.</description>
			<description locale="pt_BR">Adiciona checagem CSRF.</description>
		</release>
		<release date="2022-12-12" version="1.2.5.0" md5="e6641d60c966c98716e6296b78409325">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v1.2.5/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="omp">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<compatibility application="ops">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Feat Bio Statement field required</description>
			<description locale="en_US">Feat Bio Statement field required</description>
			<description locale="es_ES">Campo obligatorio de declaración de biografía del autor</description>
			<description locale="pt_BR">Campo de declaração de biografia do autor obrigatório</description>
		</release>
		<release date="2023-07-28" version="2.0.0.0" md5="6e8223918c3feaab84abe8283daa669d">
			<package>https://github.com/lepidus/toggleRequiredMetadata/releases/download/v2.0.0/toggleRequiredMetadata.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="omp">
				<version>~3.4.0.0</version>
			</compatibility>
			<compatibility application="ops">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed" />
			<description locale="en">Adapt plugin for OJS 3.4</description>
			<description locale="es">Adapta el complemento para la versión 3.4 de OJS</description>
			<description locale="pt_BR">Adapta plugin para a versão 3.4 do OJS</description>
		</release>
	</plugin>
	<plugin category="generic" product="doiInSummary">
		<name locale="en">DOI in Summary</name>
		<name locale="en_US">DOI in Summary</name>
		<name locale="pt_BR">DOI no Sumário</name>
		<name locale="es_ES">DOI en el Resumen</name>
		<homepage>https://github.com/lepidus/doiInSummary</homepage>
		<summary locale="en">Shows the DOI of the articles in the summary of issues and in the home page</summary>
		<summary locale="en_US">Shows the DOI of the articles in the summary of issues and in the home page</summary>
		<summary locale="pt_BR">Exibe o DOI dos artigos no sumário das edições e na página inicial</summary>
		<summary locale="es_ES">Muestra el DOI de los artículos en el resumen de la edición y en la página de inicio</summary>
		<description locale="en"><![CDATA[<p>Shows the DOI of the articles in the summary of issues and in the home page</p>]]></description>
		<description locale="en_US"><![CDATA[<p>Shows the DOI of the articles in the summary of issues and in the home page</p>]]></description>
		<description locale="pt_BR"><![CDATA[<p>Exibe o DOI dos artigos no sumário das edições e na página inicial</p>]]></description>
		<description locale="es_ES"><![CDATA[<p>Muestra el DOI de los artículos en el resumen de la edición y en la página de inicio</p>]]></description>
		<maintainer>
			<name>Lepidus Tecnologia Team</name>
			<institution>Lepidus Tecnologia</institution>
			<email>contato@lepidus.com.br</email>
		</maintainer>
		<release date="2023-05-15" version="1.3.0.0" md5="ca6712fd9f172fbec292f4caf91b8be3">
			<package>https://github.com/lepidus/doiInSummary/releases/download/v1.3.0/doiInSummary.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Shows the DOI of the articles in the summary of issues and in the home page</description>
			<description locale="en_US">Shows the DOI of the articles in the summary of issues and in the home page</description>
			<description locale="pt_BR">Exibe o DOI dos artigos no sumário das edições e na página inicial</description>
			<description locale="es_ES">Muestra el DOI de los artículos en el resumen de la edición y en la página de inicio</description>
		</release>
		<release date="2023-06-01" version="1.3.1.0" md5="1a2a9fd979dcad212809c14fafbd9934">
			<package>https://github.com/lepidus/doiInSummary/releases/download/v1.3.1/doiInSummary.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.2.0.0</version>
				<version>3.2.0.1</version>
				<version>3.2.0.2</version>
				<version>3.2.0.3</version>
				<version>3.2.0.4</version>
				<version>3.2.1.0</version>
				<version>3.2.1.1</version>
				<version>3.2.1.2</version>
				<version>3.2.1.3</version>
				<version>3.2.1.4</version>
				<version>3.2.1.5</version>
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">Fixes compatibility problem with PHP 8</description>
			<description locale="en_US">Fixes compatibility problem with PHP 8</description>
			<description locale="pt_BR">Corrige problema de compatibilidade com PHP 8</description>
			<description locale="es_ES">Soluciona un problema de compatibilidad con PHP 8</description>
		</release>
		<release date="2023-07-18" version="2.0.0.0" md5="6774de2a1b6a2520e72d005730d0b8d4">
			<package>https://github.com/lepidus/doiInSummary/releases/download/v2.0.0/doiInSummary.tar.gz</package>
			<compatibility application="ojs2">
				<version>~3.4.0.0</version>
			</compatibility>
			<certification type="reviewed"/>
			<description locale="en">This release adds support for 3.4.0-x application releases</description>
			<description locale="en_US">This release adds support for 3.4.0-x application releases</description>
			<description locale="pt_BR">Essa versão adiciona suporte às versões 3.4.0-x das aplicações</description>
			<description locale="es_ES">Esta versión agrega soporte para las versiones de aplicaciones 3.4.0-x</description>
		</release>
	</plugin>
	<plugin category="themes" product="gopher">
		<name locale="en">Gopher Theme</name>
		<name locale="en_US">Gopher Theme</name>
		<homepage>https://github.com/UMNLibraries/ojs-gopher-theme</homepage>
		<summary locale="en">A modern, simple theme with a focus on accessibility.</summary>
		<summary locale="en_US">A modern, simple theme with a focus on accessibility.</summary>
		<description locale="en"><![CDATA[<p>A modern, simple theme with a focus on accessibility. This theme was developed by PKP with the support of the University of Minnesota Libraries. The initial release supports OJS 3.3.</p>]]></description>
		<description locale="en_US"><![CDATA[<p>A modern, simple theme with a focus on accessibility. This theme was developed by PKP with the support of the University of Minnesota Libraries. The initial release supports OJS 3.3.</p>]]></description>
		<maintainer>
			<name>Publishing Team</name>
			<institution>University of Minnesota Libraries</institution>
			<email>libpubs@umn.edu</email>
		</maintainer>
		<release date="2023-03-01" version="1.0.0.0" md5="dd0d88ec507b11115cb48263584dd048">
			<package>https://github.com/UMNLibraries/ojs-gopher-theme/releases/download/1_0_0-0/ojs-gopher-theme-1_0_0-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<description>Initial release.</description>
		</release>
		<release date="2023-03-31" version="1.0.0.1" md5="55a4b5d50d3bf2abb7e046c7e1832cc8">
			<package>https://github.com/UMNLibraries/ojs-gopher-theme/releases/download/1_0_0-1/ojs-gopher-theme-1_0_0-1.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<description locale="en">Fixed base directory name.</description>
			<description locale="en_US">Fixed base directory name.</description>
		</release>
		<release date="2023-05-10" version="1.0.0.2" md5="3f1a2997c7781b796ed5d37934e9f750">
			<package>https://github.com/UMNLibraries/ojs-gopher-theme/releases/download/1_0_0-2/gopher-1_0_0-2.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<description locale="en">Updated version and download metadata to match.</description>
			<description locale="en_US">Updated version and download metadata to match.</description>
		</release>
		<release date="2023-06-12" version="1.0.1.0" md5="3f8cf517b51e9d648ab910e9b22a827b">
			<package>https://github.com/UMNLibraries/ojs-gopher-theme/releases/download/1_0_1-0/gopher-1_0_1-0.tar.gz</package>
			<compatibility application="ojs2">
				<version>3.3.0.0</version>
				<version>3.3.0.1</version>
				<version>3.3.0.2</version>
				<version>3.3.0.3</version>
				<version>3.3.0.4</version>
				<version>3.3.0.5</version>
				<version>3.3.0.6</version>
				<version>3.3.0.7</version>
				<version>3.3.0.8</version>
				<version>3.3.0.9</version>
				<version>3.3.0.10</version>
				<version>3.3.0.11</version>
				<version>3.3.0.12</version>
				<version>3.3.0.13</version>
				<version>3.3.0.14</version>
				<version>3.3.0.15</version>
			</compatibility>
			<description locale="en">Design changes and bug fixes.</description>
			<description locale="en_US">Design changes and bug fixes.</description>
		</release>
	</plugin>
</plugins>
';