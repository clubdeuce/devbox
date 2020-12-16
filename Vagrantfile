# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.require_version '>=2'

Vagrant.configure(2) do |config|

    config.vm.box = "clubdeuce/devbox"
    config.vm.box_version = "0.0.7"

    File.write('IP', "10.10.200.#{rand(10..250)}") if not File.exists?('IP')
    File.write('HOSTNAME', "dev.box") if not File.exists?('HOSTNAME')

    hostname = IO.read('HOSTNAME').strip;

    config.vm.hostname = hostname
    config.hostsupdater.aliases = [
        "www.#{hostname}",
        "adminer.#{hostname}",
        "mail.#{hostname}"
    ]

    config.vm.provider :vmware_fusion do |vmware|
        vmware.vmx["ethernet0.pcislotnumber"] = "33"
    end

    config.vm.network 'private_network', ip: IO.read('IP').strip

    config.vm.synced_folder "www", "/var/www/html"

    config.ssh.forward_agent = true
    config.ssh.insert_key = false
end