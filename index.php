﻿<!DOCTYPE html>
<html lang="es">
	<head>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>ARTICULO</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../imagenes/favicon.ico" />
		<!-- Your CSS -->
		<link rel="stylesheet" type="text/css" href="./css/articuloOscuro.css" />
	</head>
	<body>
		<div class="contenedor">
			<!-- Your HTML -->
			<div id="_fijo">
				<nav id="_menu">
					<ul>
						<li><a href   ="#">Home</a></li>
						<li><a href   ="#">Products</a></li>
						<li><a href   ="#">Services</a></li>
						<li><a href   ="#">Support</a></li>
						<li> <a class ="btn" href="#"> Inicio &#187</a></li>
						</ul>
					</nav>
				</div>
				<div id="_contenido">
					<aside id="_lateral">
						<h3>Articulos</h3>
						<div class="lateral">
							<ul>
								<li><a href="#page-1">LINUX</a> </li>
								<li><a href="#page-2">WINDOWS</a> </li>
								<li><a href="#page-3">HARDWARE</a> </li>
								<li><a href="#page-4">SOFTWARE</a> </li>
								<li><a href="#page-5">OTROS</a> </li>
								
							</ul>
						</div>
					</aside>
					<!-- ...............................page-1 ................................................. -->
					<div class="_articulo" id="page-1">
						
						<header>
							<h2>LINUX</h2>
						</header>
						<a href="#TINY">TINY</a><br>
						<a href="#TRANSMISION EN LINUX">TRANSMISION EN LINUX</a><br>	
						<a href="#LINUX EN DISCO EXTERNO Y SU PARTICIONADO">LINUX EN DISCO EXTERNO Y SU PARTICIONADO</a><br>	
						<a href="#REPARAR GRUB CON LIVE CD">REPARAR GRUB CON LIVE CD</a><br>	
						<a href="#ADAPTADORES WIFI">ADAPTADORES WIFI</a><br>	
						<!-- NUEVO PARRAFO -->
						<h3>PROGRAMA.SH</h3>
						<p>
							======================================================<br>
							PROGRAMA wifi.sh para rtl8811au<br>
							Reinstalar despues de actualizar la version del kernel<br>
							Ejecutar en la terminal sudo sh wifi.sh<br>						
							
							======================================================<br>
							#!/bin/bash<br>
							
							#!/bin/bash<br>
							clear<br>
							while :<br>
							do<br>
							echo " Escoja na opcion "<br>
							echo "1. Ir a carpeta rtl8812AU"<br>
							echo "2. Reinstalar driver"<br>
							echo "3. modprobe"<br>
							echo "4. Reiniciar Tarjeta Red"<br>
							echo "5. Salir"<br>
							echo -n "Seleccione una opcion [1 - 5]"<br>
							read opcion<br>
							case $opcion in<br>
							1) echo "Carpeta de drivers";<br>
							cd rtl8812AU_8821AU_linux && ls -l;;<br>
							2) echo "Reinstalar";<br>
							sudo make && sudo make install;;<br>
							3) echo "SUDO Modprobe";<br>
							sudo modprobe rtl8812au;;<br>
							4) echo "Reiniciando RED";<br>
							sudo /etc/init.d/networking restart;;<br>
							5) echo "agur";<br>
							exit 1;;<br>
							*) echo "$opc no es una opcion válida.";<br>
							echo "Presiona una tecla para continuar...";<br>
							read foo;;<br>
							esac<br>
							done<br>
							
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="ADAPTADORES WIFI"></a>
						<h3>ADAPTADORES WIFI</h3>
						<p>
							=========================================================================<br>
							ADAPTADORES:<br>
							1.- 8192cu (300MB)<br>
							2.- Device 007: ID 148f:7601 Ralink Technology, Corp. MT7601U Wireless Adapter<br>
							3.- 802.11.ac wlan adapter (tinxi® WiFi Dual Band USB Adaptador AC 5G 600Mbps)<br>
							==========================================================================<br>
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="REPARAR GRUB CON LIVE CD"></a>
						<h3>REPARAR GRUB CON LIVE CD</h3>
						
						<p>
							sudo su<br>
							fdisk -l<br>
							
							sudo blkid<br>
							
							sudo mount /dev/sda1 /mnt<br>
							sudo grub-install --boot-directory=/mnt/boot /dev/sda<br>
							sudo grub-install --root-directory=/mnt /dev/sda<br>
							
							sudo update-grub<br>
							sudo update-grub2<br>
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="LINUX EN DISCO EXTERNO Y SU PARTICIONADO"></a>
						<h3>LINUX EN DISCO EXTERNO Y SU PARTICIONADO</h3>
						
						<p>
							
							En este video se explica una forma facil de particionar e instalar varios SO:
							<li><a href="https://www.youtube.com/watch?v=rmXUhBX1hbo">VIDEO</a></li>
							<br>
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="TRANSMISION EN LINUX"></a>
						<h3>TRANSMISION EN LINUX</h3>
						
						<p>
							Editor——–>nano.tcz<br>
							
							Teclado——>kmaps.tcz ———–>cd /usr/share/kmap  ——->/usr/share/kmap/qwerty/es.kmap ———->nano /opt/bootlocal.sh ——>loadkmap < /usr/share/kmap/qwerty/la-latin1.kmap<br>
							
							Administrador Archivos———> pcmanfm.tcz<br>
							
							Terminal——–> transmission-daemon -a 127.0.0.1<br>
							
							Navegador—–>http://localhost:9091/transmission/web/<br>
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="TINY"></a>
						<h3>TINY</h3>
						
						<p>
							<p>Editor——–&gt;nano.tcz<br />
								Cambiar Teclado——&gt;kmaps.tcz<br />
								cd /usr/share/kmap ——-&gt;/usr/share/kmap/qwerty/es.kmap<br />
								Editar /opt/bootlocal.sh ——&gt;loadkmap /usr/share/kmap/qwerty/es.kmap<br />
								Administrador Archivos———&gt; pcmanfm.tcz<br />
								~/.config/transmission/settings.json<br />
								&#8220;speed-limit-down&#8221;: 4000,<br />
								&#8220;speed-limit-up&#8221;: 10,<br />
								&#8220;download-dir&#8221;: &#8220;/mnt/sdb1/p2p&#8221;,<br />
								Terminal——–&gt; transmission-daemon -a 127.0.0.1<br />
							Navegador—–&gt;<a href="http://localhost:9091/transmission/web/" rel="nofollow">http://localhost:9091/transmission/web/</a></p>
							<h1>Funcionamiento tiny core linux</h1>
							<p>Arquitectura :<br />
							Consta de dos archivos:</p>
							<h3>vmlinuz</h3>
							<p>y</p>
							<h3>core.gz.</h3>
							<p>Se cargan en la memoria. Las aplicaciones añadidas:</p>
							<h3>/mnt/sda1/tce/optional</h3>
							<p>Se cargaran si figuran en le fichero</p>
							<h3>/mnt/sda1/tce/onboot.lst</h3>
							<p>Las configuraciones que hace el usuario se guardan en el fichero comprimido</p>
							<h3>/mnt/sda1/tce/mydata.tgz</h3>
							<p>En el arranque se descomprime este fichero en los directorios</p>
							<h3>$HOME &#8211; /opt</h3>
							<p>y en los que figuren en el archivo</p>
							<h3>/opt/.filetool.lst</h3>
							<p>Despues del boot se ejecuta el scrip</p>
							<h3>/opt/bootlocal.sh</h3>
							<p>Si queremos añadir comandos concretos en el arranque los debemos incluir en este archivo</p>
							<h3>filetool.sh</h3>
							<p>TinyCore Linux proporciona la función de copia de seguridad que soporta la persistencia . El script hace una copia de seguridad de archivos creados en el directorio</p>
							<h3>/opt</h3>
							<p>y directorios</p>
							<h3>$ HOME</h3>
							<p>El script también copia los directorios que contienen los archivos de configuración asociados con software, si esos directorios se enumeran en el archivo</p>
							<h3>/opt/.filetool.lst</h3>
							<p>Podemos agregar estos comandos a la secuencia de comandos shell</p>
							<h3>/opt/bootlocal.sh que se ejecuta en el arranque.</h3>
							<p>&nbsp;</p>
							<h3>$ filetool.sh -b</h3>
							<p>Para apagar un sistema TinyCore Linux, utilice el comando:</p>
							<h3>$ sudo poweroff</h3>
							<p>Para reiniciar un sistema TinyCore Linux, utilice el comando:</p>
							<h3>$ sudo reboot</h3><br>
						</p>
						
						==========================================================================<br>
						<!-- NUEVO PARRAFO -->
						<a name="NUEVO"></a>
						<h3>NUEVO</h3>
						
						<p>
							copiar h3 + p<br>
						</p>
						
					</div>
					<!-- ...............................page-2 ................................................. -->
					<div class="_articulo" id="page-2">
						
						<header>
							<h2>WINDOWS</h2>
						</header>
						<p>
							AKLSKLAKSLKSLKAKLKLL
						</p>
						
					</div>
					<!-- ...............................page-3 ................................................. -->
					<div class="_articulo" id="page-3">
						
						<header>
							<h2>HARDWARE </h2>
						</header>
						<p>div con .contenedor </p>	
						
					</div>
					<!-- ...............................page-4 ................................................. -->
					<div class="_articulo" id="page-4">
						<header>
							<h2>SOFTWARE</h2>
						</header>
						<a href="#git">GIT</a><br>
						<a href="#INSTRUCCIONES">INSTRUCCIONES GIT</a><br>
						<a href="#COMPARTIR ARCHIVOS CON FIREFOX">COMPARTIR ARCHIVOS CON FIREFOX</a><br>
						<a href="#VLC">VLC</a><br>
						<a href="#RSS">RSS de videos Youtube</a><br>
						<!-- NUEVO PARRAFO -->
						<a name="git"></a>
						
						<h3>GIT RESUMEN</h3> git status<br> git add .<br> git commit -m "Mensje Nuevo Commit"<br> git push origin master<br>
						
						<p>1.- Abrir consola git<br> 2.- Cd /Carpeta de git<br> 3.- git init<br> 3.1.- git remote add origin https://github.com/berperan/berperan.github.io.git<br> 3.2.-git pull (Actualiza el repositorio local con el actual del servidor)<br> 4.- git status<br>					5.- git add ARCHIVO<br> 5.1.-git add . (Todos los Archivos)<br> 6.- git commit -m "Commit message Pasa al Head local pero aun no esta mandado." <br> 7.- git commit -a -m "Commit message Pasa al Head local pero aun no esta mandado.Ademas con -a no
						se necesita el git add previo"<br> 8.- git push origin master (Lo envia al servidor remoto) </p>
						
						Pagina con pequeño manual <a href="https://diego.com.es/compartir-y-actualizar-proyectos-en-git">MANUAL</a>
						<!-- NUEVO PARRAFO -->
						<a name="INSTRUCCIONES"></a>
						<h3>INSTRUCCIONES GIT</h3>
						
						<p>
							git config --global user.name "User"<br> git config --global user.email "User@mail.com"<br> git clone https://github.com/User/Proy.github.io.git<br> touch README.md<br> git add README.md<br> git commit -m "add README"<br> git push -u origin master<br>					cd existing_folder<br> git init<br> git status<br> git remote add origin https://github.com/berperan/berperan.github.io.git<br> git add .<br> git commit<br> git push -u origin master<br> git add archivo<br> git commit -m "comentario"<br> $ git commit
							-a -m "-a no necesita add previo"<br> git push<br> Obteniendo ayuda<br> $ git<br> --help
							<br> $ man git-
							<br> Inicializando un repositorio en un directorio existente<br> $ git init<br> $ git add *.html<br> $ git add README<br> $ git commit –m "Mensaje descriptivo"<br> Estado del repositorio<br> $ git status<br> $ git log<br> Para ver repositorios remotos<br>					git remote -v<br>
							
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="COMPARTIR ARCHIVOS CON FIREFOX"></a>
						<h3>COMPARTIR ARCHIVOS CON FIREFOX</h3>
						
						<p>
							Con esta direccion podemos compartir un archivo durante 24 horas mediante Firefox Send:<br>
							<a href="https://send.firefox.com/">MANUAL</a><br>
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="VLC"></a>
						<h3>VLC</h3>
						
						<p>
							Colocando<br>
							
							#duplicate{dst="http{mux=ts,dst=:8908/tv.asf}",dst=display}<br>
							
							en:<br>
							
							Herramientas -> Preferencias —> Mostrar ajustes —> Todo —> Salida de Emisión —> Cadena de salida de emisión predeterminada<br>
						</p>
						<!-- NUEVO PARRAFO -->
						<a name="RSS"></a>
						<h3>RSS de videos Youtube</h3>
						
						<p>
							Se crea un enlace con el codigo id correspondiente que se puede sacar del codigo fuente de la pagina de los videos del autor correspondiente.<br>
							
							https://www.youtube.com/feeds/videos.xml?channel_id=U…UuPo6…….<br>
						</p>
						
					</div>
					<!-- ...............................page-5 ................................................. -->
					<div class="_articulo" id="page-5">
						<header>
							<h2>OTROS</h2>
						</header>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						
						
					</div>					
					
					<div class="clear"></div>
				</div>
			</div>
			<footer id="_pie">
				<h6>Copyright &copy; 2014 Berperan</h6>
			</footer>
			
			<!-- 
				==========================================================================<br>
				
				<a name="NUEVO"></a>
				<h3>NUEVO</h3>
				
				<p>
				copiar h3 + p<br>
				</p>
			-->
			<!-- Your scripts -->
			<!-- FINAL ................................................................................. -->
			<script src="./js/activatables.js" type="text/javascript"></script>
			<script type="text/javascript">
				activatables('page', ['page-1', 'page-2', 'page-3', 'page-4', 'page-5']);
			</script>
		</body>
	</html>												